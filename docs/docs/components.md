# Components

## Buttons
The classic button in different sizes.

<div class="Docs">
  <button class="c-button c-button--primary c-button--small">Small button</button>
  <button class="c-button c-button--primary">Basic button</button>
  <button class="c-button c-button--primary c-button--large">Large button</button>
</div>

```html
<button class="c-button c-button--primary c-button--small">Small button</button>
<button class="c-button c-button--primary">Basic button</button>
<button class="c-button c-button--primary c-button--large">Large button</button>
```

### Mixins
```scss
@include button-style($color, $background);
```

## Forms
All generic form controls, designed for consistency.

<div class="Docs">
  <form>
    <label>Text field</label>
    <input type="text" class="c-form-input" placeholder="Text">
    <label>Select field</label>
    <select class="c-form-input">
      <option>Value 1</option>
      <option>Value 2</option>
      <option>Value 3</option>
      <option>Value 4</option>
      <option>Value 5</option>
    </select>
    <label>File input field</label>
    <input type="file" class="c-form-input__file">
    <label>Textarea field</label>
    <textarea class="c-form-input" rows="3" placeholder="Textarea"></textarea>
    <button class="c-button c-button--primary">Submit</button>
  </form>
</div>

```html
<form>
  <label>Text field</label>
  <input type="text" class="c-form-input" placeholder="Text">

  <label>Select field</label>
  <select class="c-form-input">
    <option>Value 1</option>
    <option>Value 2</option>
    <option>Value 3</option>
    <option>Value 4</option>
    <option>Value 5</option>
  </select>

  <label>File input field</label>
  <input type="file" class="c-form-input__file">

  <label>Textarea field</label>
  <textarea class="c-form-input" rows="3" placeholder="Textarea"></textarea>

  <button class="c-button c-button--primary">Submit</button>

</form>
```

### Form inline  
<div class="Docs u-mt1">
  <form>
    <label>Text field</label>
    <div class="c-form-inline">
      <input type="text" class="c-form-input" placeholder="Text">
      <button type="submit" class="c-button c-button--primary">Button</button>
    </div>
  </form> 
</div>

```html
<form>
  <div class="c-form-inline">
    <input type="text" class="c-form-input" placeholder="Text">
    <button type="submit" class="c-button c-button--primary">Button</button>
  </div>
</form>
```

## Card
An all-around flexible and composable component.

<div class="Docs">
  <div class="c-card" style="width: 20rem;">
    <h4 class="c-card__header">
        Featured
    </h4>
    <img class="c-card__img" src="https://upload.wikimedia.org/wikipedia/en/5/59/TMNT1987_Shredder.png" alt="Card image cap">
    <div class="c-card__content">
      <h4>Card title</h4>
      <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="c-button c-button--primary">Go somewhere</a>
    </div>
  </div>
</div>

```html
<div class="c-card" style="width: 20rem;">
    <h4 class="c-card__header">
        Featured
    </h4>
  <img class="c-card__img" src="..." alt="Card image cap">
  <div class="c-card__content">
    <h4>Card title</h4>
    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="c-button c-button--primary">Go somewhere</a>
  </div>
</div>
```

<div class="Docs">
  <div class="c-card">
    <h4 class="c-card__header">
        Featured
    </h4>
    <!-- <img class="c-card__img" src="https://upload.wikimedia.org/wikipedia/en/5/59/TMNT1987_Shredder.png" alt="Card image cap"> -->
    <div class="c-card__content">
      <h4>Card title</h4>
      <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="c-button c-button--primary">Go somewhere</a>
    </div>
  </div>
</div>

```html
<div class="c-card">
  <h4 class="c-card__header">
    Featured
  </h4>
  <div class="c-card__content">
    <h4>Card title</h4>
    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="c-button c-button--primary">Go somewhere</a>
  </div>
</div>
```

<div class="Docs">
  <div class="c-card">
    <div class="c-card__content">
      <h4>Card title</h4>
      <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="c-button c-button--primary">Go somewhere</a>
    </div>
  </div>
</div>

```html
<div class="c-card">
  <div class="c-card__content">
    <h4>Card title</h4>
    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="c-button c-button--primary">Go somewhere</a>
  </div>
</div>
```

## Modal
A classic modal overlay, in which you can include any content you want.

<div class="Docs">
  <div class="this-component-modal">
    <div class="c-modal__container">
      <h2 class="u-mb0">Modal title</h2>
      <hr>
      <p>Modal content goes here.</p>
      <button type="button" class="c-modal__close" aria-label="close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
  </div>
</div>

```html
<div class="c-modal">
  <div class="c-modal__container">
    <h2>Modal title</h2>
    <hr>
    <p>Modal content goes here.</p>
    <button type="button" class="c-modal__close" aria-label="close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>
```