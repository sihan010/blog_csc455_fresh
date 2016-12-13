Click the Link Below to reset your password<br>
<a href="{{$link=url('password/reset',$token).'?email='.urlencode($user->getEmailForPasswordReset())}}">
	{{$link}}
</a>