<input type="hidden" name="user_id" value="{{ $user_id }}">
<input type="submit"  class="btn btn-danger" value="Сбросить"@if (!$user_role_id)
disabled
@endif>