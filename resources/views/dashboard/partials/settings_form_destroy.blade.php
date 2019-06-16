<input type="hidden" name="user_id" value="{{ $user_id }}">
<input type="submit" style="position: absolute; bottom: 0px; right: 0px; margin: 20px 5px;" class="btn btn-danger" value="Сбросить"@if (!$user_role_id)
disabled
@endif>