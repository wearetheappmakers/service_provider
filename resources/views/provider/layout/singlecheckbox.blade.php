
<input type="checkbox" id="status-{{$id}}" href="status-{{$status}}" class="change_status" @if(Auth::guard('vendor')->check()) disabled @endif @if($status==1)? checked @endif value="{{ $id }}">