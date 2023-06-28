<div>
    <section class="header">
        <div class="row w-100">
            <div class="col-12">
                <div class="route-back d-flex flex-wrap p-2 align-items-end">
                    <h5 class="ps-3 m-0">{!!$isEditMode?"Редактирование статьи: <b wire:ignote.self>{$item->title}</b>":'Добавление статьи'!!}</h5>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <form action="#" wire:submit.prevent="save" class="w-100 px-2">
            <div class="row w-100">
                <div class="col-lg-3 col-12 mb-2">
                    <div class="input-group d-flex flex-column modal-input-field">
                        <label for="image">Выберите изображение
                            @if($item->avatar)
                                @if($avatar)
                                    <div class="p-2 no-image">
                                        @if($avatar->isPreviewable())
                                            <img src="{{$avatar->temporaryUrl()}}" alt="" class="img-fluid">
                                            <button wire:click.prevent="deleteImage" class="no-image__delete">
                                                <i class="far fa-times fa-2x"></i>
                                            </button>
                                        @endif
                                    </div>
                                @else
                                    <div class="p-2 no-image">
                                        <img src="{{asset($item->avatar)}}" alt="" class="img-fluid">
                                        <button wire:click.prevent="deleteImage(true)" class="no-image__delete">
                                            <i class="far fa-times fa-2x"></i>
                                        </button>
                                    </div>
                                @endif
                            @else
                                @if($avatar)
                                    @if($avatar->isPreviewable())
                                        <div class="p-2 no-image">
                                            <img src="{{$avatar->temporaryUrl()}}" alt="" class="img-fluid">
                                            <button wire:click.prevent="deleteImage" class="no-image__delete">
                                                <i class="far fa-times fa-2x"></i>
                                            </button>
                                        </div>
                                    @endif
                                @else
                                    <div class="no-image">
                                        <i class="fas fa-plus no-image__icon fa-2x"></i>
                                        <span class="no-image__title">Добавить изображение</span>
                                    </div>
                                @endif
                            @endif
                        </label>
                        <input type="file" wire:model.defer="avatar" id="image" class="d-none">
                    </div>
                    @error('avatar') <span class="error">{{ $message }}</span>  @enderror
                </div>
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group d-flex flex-column modal-input-field">
                                <label>Заголовок</label>
                                <input type="text" class="styled-rounded-accented-input" wire:model.defer="item.title">
                                @error('item.title') <span class="error">{{ $message }}</span>  @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group d-flex flex-column modal-input-field">
                                <label>Название</label>
                                <input type="text" class="styled-rounded-accented-input" wire:model.defer="item.name">
                                @error('item.name') <span class="error">{{ $message }}</span>  @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group d-flex flex-column modal-input-field">
                                <label>Описание</label>
                                <input type="text" class="styled-rounded-accented-input" wire:model.defer="item.description">
                                @error('item.description') <span class="error">{{ $message }}</span>  @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group d-flex flex-column modal-input-field">
                                <label>Ключевые слова</label>
                                <input type="text" class="styled-rounded-accented-input" wire:model.defer="item.keywords">
                                @error('item.keywords') <span class="error">{{ $message }}</span>  @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group d-flex flex-column modal-input-field" wire:ignore>
                                <label>Категория</label>
                                <select name="item_type-dropdown" wire:change="$set('item.news_category_id',$event.target.value)">
                                    @foreach(\App\Models\NewsCategory::all() as $category)
                                        <option @if($item->news_category_id == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('item.news_category_id') <span class="error">{{ $message }}</span>  @enderror
                        </div>
                        <div class="col-12">
                            <div class="input-group d-flex flex-column modal-input-field" wire:ignore>
                                <label for="preivew">Краткое описание</label>
                                <textarea data id="preview" data-tiny data-tinymce-id="preview" class="styled-rounded-accented-input" wire:model.defer="item.preview">
                                    {!! $item->preview !!}
                                </textarea>
                            </div>
                            @error('item.preview') <span class="error">{{ $message }}</span>  @enderror
                        </div>
                        <div class="col-12">
                            <div class="input-group d-flex flex-column modal-input-field" wire:ignore>
                                <label for="preivew">Полное описание</label>
                                <textarea data id="body" data-tiny data-tinymce-id="body" class="styled-rounded-accented-input" wire:model.defer="item.body">
                                    {!! $item->body !!}
                                </textarea>
                            </div>
                            @error('item.body') <span class="error">{{ $message }}</span>  @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    @if($isEditMode)
                        <livewire:admin.components.gallery :tname="$temp_id" :model-type="\App\Models\News::class" is-edit="1" :model-id="$item->id"/>
                    @else
                        <livewire:admin.components.gallery :tname="$temp_id" :model-type="\App\Models\News::class"/>
                    @endif
                </div>
            </div>
            <div class="row w-100 my-2">
                <div class="col-12 d-flex justify-content-end">
                    <div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="cancel">Отмена</button>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>
@push('styles')
    <link rel="stylesheet" href="{{asset('shared/assets/fancybox/css/fancybox.css')}}">
@endpush
@push('scripts')
    <script src="{{asset('shared/assets/choices.js/scripts/choices.min.js')}}"></script>
    <script src="{{asset('shared/assets/fancybox/js/fancybox.min.js')}}"></script>
    <script>
        (()=>{
            (()=>{

                let element = document.querySelector('[name="item_type-dropdown"]');

                let choiceInstance = new Choices(element,{
                    removeItemButton: true,
                    searchPlaceholderValue: 'Введите название',
                    noChoicesText: 'Нед доступных категорий'
                });

            })();
        })();
    </script>
@endpush

@push('adminFunctionsExtension')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                adminFunctions.tinymceInstances()['body'].on('change', () => {
                    @this.set('item.body', adminFunctions.tinymceInstances()['body'].getContent())
                })
                adminFunctions.tinymceInstances()['preview'].on('change', () => {
                    @this.set('item.preview', adminFunctions.tinymceInstances()['preview'].getContent())
                })
            }, 200);
        })
    </script>
@endpush
