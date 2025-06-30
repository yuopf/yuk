
<div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="authModalLabel">Войдите в аккаунт</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <p>Чтобы оформить заказ, пожалуйста, авторизуйтесь или зарегистрируйтесь.</p>
        <div class="d-flex justify-content-end gap-2">
            <a href="{{ url('/login') }}" class="btn btn-outline-primary">Войти</a>
            <a href="{{ url('/register') }}" class="btn btn-primary">Регистрация</a>
        </div>
      </div>
    </div>
  </div>
</div>