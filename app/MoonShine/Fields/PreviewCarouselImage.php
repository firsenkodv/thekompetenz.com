<?php

namespace App\MoonShine\Fields;

use MoonShine\UI\Fields\Field;

class PreviewCarouselImage extends Field
{
    protected string $view = 'moonshine.fields.preview_carousel_image';

    public string $img;

    public function default($img): self
    {
        $this->img = $img;
        return $this;
    }




    protected function viewData(): array
    {
        return [
            'img' => $this->img,
        ];
    }
}
