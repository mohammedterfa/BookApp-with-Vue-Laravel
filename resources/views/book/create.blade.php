

<form action="" method="POST">@csrf

    <label>Name of book</label>
    <input type="text" name="name" placeholder="name of book">
    <br>
    <label>Description of book</label>
    <textarea name="description"></textarea>
    <br>
    <label>Category</label>
    <select name="category">
        <option value="">select</option>
        <option value="frictional">frictional book</option>
        <option value="biography">biography book</option>
        <option value="comdey">comdey book</option>
    </select>
    <br>

    <input type="submit" value="submit">

</form>
