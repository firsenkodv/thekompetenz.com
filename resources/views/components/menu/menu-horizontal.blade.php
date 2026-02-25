@props([
    'items' =>[],
    'route' => '#'
])
@if(count($items))
    <div class="menu-hor-wrap">
        <div class="block">
        <ul class="menu_menu-horizontal">
            @foreach($items as $item)
                <li class="{{ active_linkMenu(asset(route('item.solutions', ['solution_category' => $item->solutionCategory->slug, 'solution_item' => $item->slug ])), 'find')  }}">
                    <a href="{{ route('item.solutions', ['solution_category' => $item->solutionCategory->slug, 'solution_item' => $item->slug ]) }}">{{ ($item->title) }}</a>
                </li>
            @endforeach
        </ul>
        </div>
    </div>
@endif

