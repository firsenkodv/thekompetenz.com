@props([
    'value_tag',
    'value_sorting'
    ])

    <div class="f_insight f_wrap">
        <div class="f_insight-feedback-form">
            <x-form.form
                method="POST"
                :put="false"
                :action="route('insight.search')"
            >
                <div class="title">Filter</div>
                <div class="f_insight__flex">
                    <div class="f_insight__left">
                        <x-form.form-select
                            name="Sorting" {{-- назване --}}
                            :selected="$value_sorting"
                            :value="$value_sorting"
                            :options="$materials"
                            field_name="sorting"
                        />
                    </div>
                    <div class="f_insight__center">
                        <x-form.form-select
                            name="Solution" {{-- назване --}}
                            :selected="$value_tag"
                            :value="$value_tag"
                            :options="$tags"
                            field_name="tag"
                        />
                    </div>
                    <div class="f_insight__right">
                        <x-form.form-button type="submit">Search</x-form.form-button>
                        <x-buttons.button-component class="btn btn_white" :href="route('for.insights')">Reset</x-buttons.button-component>
                    </div>
                </div>

            </x-form.form>
        </div>

    </div>
