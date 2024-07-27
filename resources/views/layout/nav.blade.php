@include('layout.styles')

<nav class="navbar navbar-expand-lg navbar-light brainster-bg">
  <div class="container">
    <a class="navbar-brand" href="{{ route('homepage') }}">
      <img src="{{asset('img/logo_footer_black.png')}}" class="w-25" alt="Brainster Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item">
          <a class="nav-link" href="https://brainster.co/full-stack/" target="_blank">Академија за Програмирање</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://brainster.co/marketing/" target="_blank">Академија за Маркетинг</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://brainster.co/graphic-design/" target="_blank">Академија за Дизајн</a>
        </li>
        <li class="nav-item pr-4">
          <a class="nav-link" href="https://brainster.co/about-us/" target="_blank">Блог</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hire-btn text-light" href="#" data-bs-toggle="modal" data-bs-target="#hireModal">Вработи
            наш студент</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Vraboti Student Modal -->
<div class="modal fade" id="hireModal" tabindex="-1" aria-labelledby="hireModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hireModalLabel">Вработи наш студент</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('contact.send') }}" method="POST">
          @csrf
          @error('email')
        <span class="text-danger m-0"> {{ $message }}</span>
      @enderror
          <div class="form-group">
            <label for="email">Email адреса</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="phone" class="form-control" id="phone" name="phone">
          </div>
          <div class="form-group">
            <label for="company">Компанија</label>
            <input type="text" class="form-control" id="company" name="company">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Откажи</button>
            <button type="submit" class="btn btn-primary">Испрати</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>