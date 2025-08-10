<header class="header">
    <nav class="nav-bar">
        <div class="nav-left">
            <a href="/">Hellenoir.co</a>
        </div>
        <div class="nav-center">
            <img src="https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExaWx1cHd2anM0N2p0NGZ1cndsN28xcTAzM2w2MjdkMGxmeHVmeGRvcyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/gahyl3UyyjdLhg0KoR/giphy.gif" class="logo">
        </div>
        <div class="nav-right">
            <a href="/schedule">Jadwal</a>
            <a href="/categories">Kategori</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
            <a href=""><button type="submit" class="nav-right">Logout</button></a>
        </form>
        </div>
    </nav>
</header>