<?php

namespace App\Http\Livewire\Admin\Pages;

use App\Models\News;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\Redirector;
use Livewire\WithFileUploads;

class NewsEdit extends Component
{
    use WithFileUploads;

    public bool $isEditMode;

    public News $item;

    public $avatar;
    public string|null $temp_id = null;

    protected function rules(): array
    {
        $return = [
            'item.title'            => 'required|string',
            'item.name'             => 'required|string',
            'item.description'      => 'string|nullable',
            'item.keywords'         => 'string|nullable',
            'item.preview'          => 'required|string',
            'item.body'             => 'required|string',
            'item.news_category_id' => 'required|int',
        ];

        if(!$this->isEditMode)
            $return['avatar']   = 'required|image';

        return $return;
    }

    protected function messages(): array
    {
        return [
            'item.title.required'            => 'Ошибка! Поле Заголовок обязательно к заполнению',
            'item.body.required'             => 'Ошибка! Поле "Полное описание" обязательно к заполнению',
            'item.preview.required'          => 'Ошибка! Поле "Краткое описание" обязательно к заполнению',
            'item.name.required'             => 'Ошибка! Поле Название обязательно к заполнению',
            'item.news_category_id.required' => 'Ошибка! Вы не выбрали категорию статьи',
            'avatar.image'                   => 'Ошибка! Выбранный файл не является изображением!',
            'avatar.required'                => 'Ошибка! Вы не загрузили главное изображение новости!',
        ];
    }

    public function mount( ?int $id = null )
    {
        $this->isEditMode = $id != null;
        $this->item = $this->isEditMode ? News::find($id) : new News();
            $this->temp_id = uniqid();
    }

    public function cancel(): Redirector
    {
        return redirect()->route('admin.news.list');
    }

    public function save()
    {
        $this->validate();

        if($this->avatar){
            $fName = explode('/',$this->item->avatar);
            $fName = end($fName);

            \Storage::delete('public/news/'.$fName);
            $fileName = uniqid().".".$this->avatar->extension();
            $tmp = $this->avatar->storeAs('public/news', $fileName);
            $this->item->avatar = "storage/news/{$fileName}";
        }

        $this->item->slug = Str::slug($this->item->name);
        $this->item->save();

        if(!$this->isEditMode){
            $galleryItems = \App\Models\Gallery::findByModelTypeAndTempId(News::class, $this->temp_id);
            foreach($galleryItems as $image) {
                $image->model_id = $this->item->id;
                $image->temp_id = null;
                $image->save();
            }
        }

        return redirect()->route('admin.news.list');
    }

	public function render()
	{
		return view( 'livewire.admin.pages.news-edit' )->layout('components.layouts.admin.authorized');
	}
}
