@extends('layouts.main')

@section('content')

  <div class="rectangle">
    <h1 class="title">Choose what I can do for you</h1>
    <h3 class="subtitle">Enjoy your life with our service</h3>
  </div>

  <div class="container mt-3 card-container">
    @foreach ($pricings as $pricing)
      <div class="card">
        <img src="https://stickerly.pstatic.net/sticker_pack/A9DcIhiYowUWLvTEGBiYtQ/3FP6CO/6/fcb29463-50c8-447e-8974-a25b0e418411.png" alt="title" class="card-img">
        <div class="card-content">
          <h3 class="card-title">{{ $pricing["tittle"] }}</h3>
          <p class="card-description">{{ $pricing["desc"] }}</p>
          <p class="card-price">{{ $pricing["price"] }}</p>
          <a href="/pricing/{{ $pricing["slug"] }}">
            <button type="button" class="btn btn-outline-info btn-lg">View</button>
          </a>
        </div>
      </div>
    @endforeach
  </div>

@endsection

<style>
  .title {
    font-size: 64px;
    font-weight: bold;
    color: white;
  }

  .card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .card {
    width: 300px;
    height: 550px;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    margin: 10px;
    background-color: rgb(48, 47, 47);
  }

  .card-img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }

  .card-content {
    padding: 20px;
  }

  .card-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
    color: white;
  }

  .card-description {
    font-size: 16px;
    margin-bottom: 10px;
    color: darkgray;
  }

  .card-price {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
    color: white;
  }

  /* Media queries */
  @media (max-width: 768px) {
    .card {
      width: calc(50% - 20px);
    }

    .card-img {
      height: 250px;
    }

    .card-title {
      font-size: 20px;
    }

    .card-description {
      font-size: 14px;
    }

    .card-price {
      font-size: 20px;
    }
  }

  .rectangle {
    width: 100%;
    height: 300px;
    background: linear-gradient(to right, #6EBDF8, #E27ADE);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .title {
    font-size: 64px;
    font-weight: bold;
    color: white;
  }

  .subtitle {
      font-size: 32px;
      color: white;
      margin-top: 10px;
    }

    @media (max-width: 768px) {
      .title {
        font-size: 48px;
      }

      .subtitle {
        font-size: 24px;
      }
    }
</style>
