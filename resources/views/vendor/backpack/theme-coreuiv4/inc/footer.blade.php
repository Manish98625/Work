@if (backpack_theme_config('show_powered_by') || backpack_theme_config('developer_link'))
    <div class="m-auto ml-auto mr-auto text-muted p-2" style="width: fit-content">
      @if (backpack_theme_config('developer_link') && backpack_theme_config('developer_name'))
      {{ trans('') }} <a target="_blank" rel="noopener"></a>.
      @endif
      @if (backpack_theme_config(''))
      {{ trans('backpack::base.powered_by') }} <a target="_blank" rel="noopener"></a>.
      @endif
    </div>
@endif