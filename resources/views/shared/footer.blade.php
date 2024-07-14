
<footer>
    <div class="footer">
        <div class="col-33">
            <div class="logo">
                <a href="{{route('comics.index')}}">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
                    <h3>Comis Srl</h3>
                    <p>
                        Via dei Manga n 7 <br> 
                        21030 Varese 
                    </p>  
                </a>
            </div>
        </div>
        <div class="col-33">
            <nav>
                <ul>
                    <li><a href="{{route('comics.index')}}">Home</a></li>
                    <li><a href="{{route('comics.index')}}">Comic</a></li>
                    <li><a href="{{route('comics.index')}}">Price</a></li>
                    <li><a href="{{route('comics.index')}}">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-33">
            <div class="search">
                <form action="">
                    @csrf
                    <h4>Search</h4>
                    <div>
                        <input type="text" name="search">
                    </div>
                    <input class="button" type="submit" value="Search">
                </form>   
            </div>
        </div>
        
        
        

    </div>
    <div class="socket">
        © byHYONS | 2024
    </div>
</footer>