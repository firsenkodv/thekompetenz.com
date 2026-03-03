@props([
    'route' => '#',
])
<div class="business-feedback-form main-contact-feedback-form">
<x-form.form
    method="POST"
    :put="false"
    :action="$route"
>
    <x-form.form-select
        name="Insurance" {{-- назване --}}
        value=""
        :options="config2('moonshine.setting.type_insurance')"
        field_name="type_insurance"
        required="{{ true }}"
    />

    <x-form.form-input
        name="name"
        type="text"
        label="Name"
        value="{!!  (old('username'))?: '' !!}"
        required="{{ true }}"
    />

    <x-form.form-input
        name="phone"
        type="tel"
        label="Phone"
        value="{{ (old('phone'))?: '' }}"
        class="imask"

    />

    <x-form.form-input
        name="email"
        type="email"
        label="Email"
        value="{{ (old('email'))?: '' }}"
        required="{{ true }}"
    />
    <br>
    <button type="submit" class="btn btn-big"><span>Submit application</span></button>

</x-form.form>
</div>
