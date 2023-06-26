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

    public function save()
    {
        $validatedData = $this->validate([
            'image' => 'image|max:1024', // Проверка на изображение и максимальный размер 1 МБ
        ]);

        // Выполните дальнейшую обработку загруженного изображения, например, сохраните его на сервере
        $path = $validatedData['image']->store('storage', 'public');
        //file_put_contents($_SERVER['DOCUMENT_ROOT'].'/text.txt', $path);

        $userId = Auth::user()->id;
        User::where('id', $userId)
            ->update([
                'image' => $path,
            ]);
    }

    public function render()
    {
        return view('livewire.upload-image-form');
    }
}
