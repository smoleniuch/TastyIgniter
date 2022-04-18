@php
    $fieldOptions = $field->options();
@endphp
<div class="field-radio">
    @foreach ($fieldOptions as $key => $value)
        <div
            id="{{ $field->getId() }}"
            class="form-check custom-control-inline"
        >
            <input
                type="radio"
                id="{{ $field->getId($loop->iteration) }}"
                class="form-check-input"
                name="{{ $field->getName() }}"
                value="{{ $key }}"
                {!! $field->value == $key ? 'checked="checked"' : '' !!}
                {!! $this->previewMode ? 'disabled="disabled"' : '' !!}
                {!! $field->getAttributes() !!}
            />
            <label
                class="form-check-label"
                for="{{ $field->getId($loop->iteration) }}"
            >{{ is_lang_key($value) ? lang($value) : $value }}</label>
        </div>
    @endforeach
</div>
