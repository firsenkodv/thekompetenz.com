<?php

namespace App\View\Components\Content;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Component;

class FilePdf extends Component
{
    public array $files = [];

    public function __construct($files = null)
    {
        if (isset($files)) {
            $f = [];
            foreach ($files as $k=>$file) {
                $f[$k]['title'] = ($file['json_files_label'])?:'-';
                $f[$k]['href'] = ($file['json_files_text'])? Storage::url($file['json_files_text']):'#';
            }
            $this->files = $f;
        }

    }


    public function render(): View|Closure|string
    {
        return view('components.content.file-pdf');
    }
}
