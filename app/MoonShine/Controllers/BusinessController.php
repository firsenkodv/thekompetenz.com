<?php

declare(strict_types=1);

namespace App\MoonShine\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use MoonShine\Contracts\Core\DependencyInjection\CrudRequestContract;
use MoonShine\Laravel\Http\Controllers\MoonShineController;
use Support\Traits\Upload;
use Symfony\Component\HttpFoundation\Response;

final class BusinessController extends MoonShineController
{
    use Upload;


    public function business(Request $request): Response
    {


        $data = $request->all();

        /**  Сохраняем файл **/
        $destinationPath = 'images/business';

        if(isset($data['temp_img']))
        {
            $array = (config2_array('moonshine.business'));
            foreach($data['temp_img'] as $k => &$service) {
                if(isset($service['json_img'])) {
                    $service['json_img'] = $this->UploadFile($service['json_img'], $destinationPath);
                } else {
                    if(isset($array['temp_img'][$k]['json_img'])) {
                        $service['json_img'] = $array['temp_img'][$k]['json_img'];
                    }
                }
            }
            unset($service); // освобождаем переменную после завершения цикла

        }

        Storage::disk('config')->put("moonshine/business.php", "<?php\n\n" . 'return ' . var_export($data, true) . ";\n");

        return back();



    }
}
