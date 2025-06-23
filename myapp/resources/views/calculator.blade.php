@extends('layouts.app')

@section('content')

<div class="calculator__container container">
    <div class="section">
        
        <h3>Параметры комнаты</h3>
        <div class="input-group">
            <label>Длина, м</label>
            <input type="number" id="length" value="1.0" step="0.1" min="0">
            <span>X</span>
            <label>Ширина, м</label>
            <input type="number" id="width" value="1.0" step="0.1" min="0">
        </div>
        <div class="input-group">
            <label>Углы, шт.</label>
            <button onclick="changeValue('corners', -1)">-</button>
            <input type="number" id="corners" value="0" min="0">
            <button onclick="changeValue('corners', 1)">+</button>
        </div>
        <div class="input-group">
            <label>Трубы, шт.</label>
            <button onclick="changeValue('pipes', -1)">-</button>
            <input type="number" id="pipes" value="0" min="0">
            <button onclick="changeValue('pipes', 1)">+</button>
        </div>
    </div>

    <div class="section">
        <h3>Профиль</h3>
        <div class="tabs">
            <button class="active" onclick="setProfile('plastic')">Пластиковый</button>
            <button onclick="setProfile('aluminum')">Алюминиевый</button>
            <button onclick="setProfile('shadow')">Теневой</button>
        </div>
    </div>

    <div class="section">
        <h3>Освещение</h3>
        <div class="input-group">
            <label>Монтаж люстр, шт.</label>
            <button onclick="changeValue('chandeliers', -1)">-</button>
            <input type="number" id="chandeliers" value="0" min="0">
            <button onclick="changeValue('chandeliers', 1)">+</button>
        </div>
        <div class="input-group">
            <label>Монтаж светильников, шт.</label>
            <button onclick="changeValue('lights', -1)">-</button>
            <input type="number" id="lights" value="0" min="0">
            <button onclick="changeValue('lights', 1)">+</button>
        </div>
    </div>

    <div class="section">
        <h3>Оформление окна</h3>
        <div class="tabs">
            <button onclick="setWindow('curtain')">Карниз потолочный, м</button>
            <button class="active" onclick="setWindow('hidden')">Скрытая гардина, м</button>
            <button onclick="setWindow('niche')">Карниз в нише, м</button>
        </div>
        <div class="input-group">
            <button onclick="changeValue('windowLength', -1)">-</button>
            <input type="number" id="windowLength" value="1" min="0">
            <button onclick="changeValue('windowLength', 1)">+</button>
        </div>
    </div>

    <div class="section">
        <h3>Цена уставки потолка</h3>
        <div class="total" id="totalPrice">3 045 ₽</div>
    </div>
</div>

 

<script src="{{ asset('calculator.js') }}"></script>

@endsection