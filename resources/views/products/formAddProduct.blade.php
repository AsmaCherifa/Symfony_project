<form method="post" action="{{route('product.store')}}"> 
    @csrf
titre :<input type="text" name="titre">
auteur :<input type="text" name="auteur">
prix :<input type="text" name="prix">
<input type="submit" value="envoyer">
</form>