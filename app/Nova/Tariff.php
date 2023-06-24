<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Outl1ne\NovaSimpleRepeatable\SimpleRepeatable;

class Tariff extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Tariff>
     */
    public static $model = \App\Models\Tariff::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Tytuł', 'title')->sortable(),
            Number::make('Cena', 'price')->sortable(),
            Text::make('Ogłaszać', 'announce')->sortable(),
            Text::make('Tekst szczegółowy', 'detail_text')->sortable(),
            Number::make('Ilość dni próbnych', 'trial')->sortable(),
            BelongsTo::make('TariffAnnotation')->sortable()
                ->nullable()
                ->displayUsing(function($tariffAnnotation){
                    return $tariffAnnotation->text;
                }),
            SimpleRepeatable::make('Lista', 'list', [
                Text::make('text'),
            ]),
            Boolean::make('Czy ten produkt jest próbny?', 'is_test')->sortable(),
            Boolean::make('Czy ten produkt jest aktywny?', 'is_actual')->sortable(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
