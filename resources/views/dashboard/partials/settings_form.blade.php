<div class="form-group">
<label for="role_id">Тип учетной записи</label>

<select  class="form-control" name="role_id" @if ($user_role_id)
    disabled
@endif>

<option value="">-- Не указан --</option>
        @foreach($roles as $role)
            <option value="{{ $role->id }}"
                
                    @if ($user_role_id == $role->id)
                    selected = "selected"
                    @endif
                
            >
            {{ $role->role }}
        </option>
        @endforeach
</select>
</div>
<input type="hidden" name="user_id" value="{{ $user_id }}">
<input type="submit" class="btn btn-primary"value="Сохранить"@if ($user_role_id)
disabled
@endif>