<form method="post" action="{{route('livre.update',$livre->id)}}">   
@csrf
@method('PUT')
titre :<input type="text" name="titre" value="{{$livre->titre}}">
auteur :<input type="text" name="auteur" value="{{$livre->auteur}}">
prix :<input type="text" name="prix" value="{{$livre->prix}}">
<input type="submit" value="envoyer">
</form>