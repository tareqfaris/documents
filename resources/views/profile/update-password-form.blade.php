<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        تحديث كلمة المرور
    </x-slot>

    <x-slot name="description">
      
    </x-slot>

    <x-slot name="form">
        <div class="w-md-75">
            <div class="form-group">
                <x-jet-label for="current_password" value="كلمة المرور الحالية" />
                <x-jet-input id="current_password" type="password" class="{{ $errors->has('current_password') ? 'is-invalid' : '' }}"
                             wire:model.defer="state.current_password" autocomplete="current-password" />
                <x-jet-input-error for="current_password" />
            </div>

            <div class="form-group">
                <x-jet-label for="password" value="كلمة المرور الجديدة" />
                <x-jet-input id="password" type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                             wire:model.defer="state.password" autocomplete="new-password" />
                <x-jet-input-error for="password" />
            </div>

            <div class="form-group">
                <x-jet-label for="password_confirmation" value="تأكيد كلمة المرور الجديدة" />
                <x-jet-input id="password_confirmation" type="password" class="{{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                             wire:model.defer="state.password_confirmation" autocomplete="new-password" />
                <x-jet-input-error for="password_confirmation" />
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-button>
            حفظ
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
