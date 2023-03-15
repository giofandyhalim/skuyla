<html>
    <head>
        <title>
            Edit Book
        </title>
    </head>

    <body>
        <div style="background: #388BF2; font-size: 24px; color: white">
            Simple libary app
        </div>

        <div style="margin-top: 20px; margin-bottom: 20px">
            <a href="/books"> Book list</a>
            <div>
                <form method="post" action="{{ url("/books", $book->id) }}">
                    {{ csrf_field() }}
                    {{ method_field ('PUT') }}
                    <div>
                        <label>
                            Title
                            <input name="title" value="{{ $book->title }}">
                        </label>
                    </div>
                    <div>
                        <label>
                            Publication
                            <input name="publication" value="{{ $book->publication }}">
                        </label>
                    </div>
                    <div>
                        <label>
                            Author
                            <input name="author" value="{{ $book->author }}">
                        </label>
                    </div>
                    <div>
                        <label>
                            Year
                            <input name="year" type="date" value="{{ $book->year }}">
                        </label>
                    </div>

                    <button type="submit">Update</button>
                </form>    
            </div>
        </div>
    </body>
</html>