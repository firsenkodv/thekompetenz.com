<?php

declare(strict_types=1);

namespace App\MoonShine\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use MoonShine\Contracts\Core\DependencyInjection\CrudRequestContract;
use MoonShine\Laravel\Http\Controllers\MoonShineController;
use Support\Traits\Upload;
use Symfony\Component\HttpFoundation\Response;

final class HomeController extends MoonShineController
{
    use Upload;


    public function home(Request $request): Response
    {


        $data = $request->all();

        /**  Сохраняем файл **/
        $destinationPath = 'home/images';
        if(isset($data['temp_img'])) {
            /**  Перезаписываем **/
            $data['temp_img']  = $this->UploadFile($request->file('temp_img'), $destinationPath);
        } else {
            /**  Сохраним, что было **/
            if(config2('moonshine.home.temp_img')) {
                $data['temp_img'] = config2('moonshine.home.temp_img');
            }
        }

        if(isset($data['services_carousel']))
        {

            $array = (config2_array('moonshine.home'));
            foreach($data['services_carousel'] as $k => &$service) {
                if(isset($service['json_img'])) {
                    $service['json_img'] = $this->UploadFile($service['json_img'], $destinationPath);
                } else {
                    if(isset($array['services_carousel'][$k]['json_img'])) {
                        $service['json_img'] = $array['services_carousel'][$k]['json_img'];
                    }
                }
            }
            unset($service); // освобождаем переменную после завершения цикла

        }



        Storage::disk('config')->put("moonshine/home.php", "<?php\n\n" . 'return ' . var_export($data, true) . ";\n");

        return back();



    }
}
