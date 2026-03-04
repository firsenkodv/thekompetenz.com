@props([
    'value_tag',
    'value_sorting'
    ])
@section('filter_solution')
    <div class="f_solution f_wrap">
        <div class="f_solution-feedback-form">
            <x-form.form
                method="POST"
                :put="false"
                :action="route('solution.search')"
            >
                <div class="f_solution__flex">
                    <div class="f_solution__left">
                        <x-form.form-select
                            name="Sorting" {{-- назване --}}
                            :selected="$value_sorting"
                            :value="$value_sorting"
                            :options="$materials"
                            field_name="sorting"
                        />
                    </div>
                    <div class="f_solution__center">
                        <x-form.form-select
                            name="Solution" {{-- назване --}}
                            :selected="$value_tag"
                            :value="$value_tag"
                            :options="$tags"
                            field_name="tag"
                        />
                    </div>
                    <div class="f_solution__right">
                        <x-form.form-button type="submit">Отправить</x-form.form-button>
                        <x-buttons.button-component class="btn btn_white" :href="route('categories.solutions')">Сброс</x-buttons.button-component>
                    </div>
                </div>

            </x-form.form>
        </div>

    </div>
@endsection
