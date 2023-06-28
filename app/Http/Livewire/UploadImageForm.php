<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadImageForm extends Component
{
    use WithFileUploads;

    public $image;

//    public function upload($name)
//    {
//        $this->image->storeAs('/', $name, $disk = 'avatars');
//    }

//    public function updateImage()
//    {
//        return 'true';
//    }


    public function save()
    {

        $validatedData = $this->validate([
            'image' => 'image|mimes:jpeg,jpg,png,gif|max:1024', // Проверка на изображение и максимальный размер 1 МБ
        ]);

        // Выполните дальнейшую обработку загруженного изображения, например, сохраните его на сервере
        $path = $validatedData['image']->store('storage', 'public');
        //file_put_contents($_SERVER['DOCUMENT_ROOT'].'/text.txt', $path);



        Auth::user()->update([
            'image' => $path,
        ]);
        sleep(1);
        return redirect()->to('/home');
    }

    public function render()
    {
        return view('livewire.upload-image-form');
    }
}
