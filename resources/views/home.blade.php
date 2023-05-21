@extends('layouts.main')

@section('content')
    <div class="full-screen-rectangle">
        <div class="container">
            <div class="left-side">
                <h3>Pengen Liburan</h3>
                <h1>Tapi Banyak Tugas?</h1>
                <p>Joki Tugas. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <button class="btn-blue">Order Now</button>
                <button class="btn-white">Contact</button>
            </div>
            <div class="right-side">
                <img src="img/duduk.png" alt="Image">
            </div>
        </div>
    </div>

@endsection

<style>
    /* public/css/style.css */
    
/* Full Screen Rectangle */
.full-screen-rectangle {
    width: 100%;
    height: 1006px;
    background: linear-gradient(to bottom, #2196F3,#edf7ff, #FFFFFF);
}

/* Container */
.container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    padding: 0 20px;
}

/* Left Side */
.left-side {
    color: #FFFFFF;
    width: 50%;
}

.left-side h3 {
    color: #2196F3;
    font-size: 36px;
}

.left-side h1 {
    background: linear-gradient(to right, #2196F3, #E27ADE);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 48px;
    margin-bottom: 20px;
    font-weight: bold;
}

.left-side p {
    margin-bottom: 20px;
    color: black;
    font-size: 24px;
}

.left-side button {
    background: #2196F3;
    color: #FFFFFF;
    padding: 10px 20px;
    margin-right: 10px;
    border: none;
    cursor: pointer;
}

/* Right Side */
.right-side {
    display: flex;
    align-items: flex-end;
}

.right-side img {
    width: 664px;
    height: 534px;
}

/* Media queries */
@media (max-width: 768px) {
    .container {
        flex-direction: column;
    }
    
    .left-side {
        width: 100%;
        text-align: center;
    }
    
    .left-side h1 {
        font-size: 36px;
    }
    
    .left-side p {
        font-size: 20px;
    }
    
    .right-side {
        justify-content: center;
    }
    
    .right-side img {
        width: 100%;
        height: auto;
    }
    
    /* Navbar styles for mobile */
    .navbar {
        /* Update the styles for mobile navbar here */
    }
}
</style>
