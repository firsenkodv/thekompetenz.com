@section('filter_contact')
    <div class="f_contact">
        <div class="f_contact-feedback-form">
            <x-form.form
                method="POST"
                :put="false"
                :action="route('contacts.search')"
            >

                <x-form.form-select
                    name="Choose country" {{-- назване --}}
                value=""
                    :options="$list"
                    field_name="search"
                    required="{{ true }}"
                />
            </x-form.form>
        </div>

    </div>
@endsection
