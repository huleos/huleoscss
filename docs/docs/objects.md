# Objects

## Containers
A simple container to center your content horizontally. It providers a max-width to wrap content in with the option of centering it within the parent container.

```html
<div class="o-container--sm">Small = 680px</div>
<div class="o-container--md">Medium = 800px</div>
<div class="o-container">Large = 1140px</div>
<div class="o-container--full">Full 100%</div>
```

## Flex
Flex containers and items are able to be modified further with additional flex properties.
```html
<div class="o-flex">Display flex</div>
<div class="o-flex--left">Aligned to the left</div>
<div class="o-flex--right">Aligned to the right</div>
<div class="o-flex--center">Aligned to the center</div>
<div class="o-flex--justify">Aligned to the edges</div>
<div class="o-flex--spaced">Aligned to the space around</div>
<div class="o-flex--top">Align top</div>
<div class="o-flex--bottom">Align bottom</div>
<div class="o-flex--middle">Align middle</div>
<div class="o-flex--stretch">Align stretch</div>
```

## Grid
A simple structure for any website, based on two responsive columns.

<div class="Docs">
  <div class="o-container">
    <div class="o-row o-flex">
      <div class="o-content">Content layout</div>
      <div class="o-sidebar">Sidebar layout</div>
    </div>
  </div>
</div>

```html
<div class="o-container">
  <div class="o-row o-flex">
    <div class="o-content">Content layout</div>
    <div class="o-sidebar">Sidebar layout</div>
  </div>
</div>
```

## Embed
Create responsive video or slideshow based on the width of the parent by creating an intrinsic ratio that scales on any device.

<div class="Docs">
  <div class="o-embed o-embed--16x9">
    <iframe class="o-embed__item" src="https://www.youtube.com/embed/5fOqdNnX4nQ" allowfullscreen=""></iframe> 
  </div>
</div>

```html
<div class="o-embed o-embed--16x9">
  <iframe class="o-embed__item" src="..." allowfullscreen></iframe> 
</div>
```

### Aspect ratios
Aspect ratios can be customized with modifier classes.

```html
<!-- 1:1 aspect ratio -->
<div class="o-embed o-embed--square">
  <iframe class="o-embed__item" src="..."></iframe> 
</div>

<!-- 4:3 aspect ratio -->
<div class="o-embed o-embed--4x3">
  <iframe class="o-embed__item" src="..."></iframe> 
</div>

<!-- 16:9 aspect ratio -->
<div class="o-embed o-embed--16x9">
  <iframe class="o-embed__item" src="..."></iframe> 
</div>

<!-- 3:1 aspect ratio -->
<div class="o-embed o-embed--3x1">
  <iframe class="o-embed__item" src="..."></iframe> 
</div>
```

## Media
The Media Object pattern is: image thingy on the left, heading and text on the right.
That's what Nicole Sullivan called it and the name stuck.

<div class="Docs">
  <div class="o-media">
    <div class="o-media__figure">
      <img src="http://lorempixel.com/200/200/" alt="">
    </div>
    <div class="o-media__body">
      <h2>Media object</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo numquam aliquid facere deleniti excepturi, illum minus, quo expedita.</p>
    </div>
  </div>
</div>

```html
<div class="o-media">
  <div class="o-media__figure">
    <img src="..." alt="">
  </div>
  <div class="o-media__body">
    <h2>Media object</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo numquam aliquid facere deleniti excepturi, illum minus, quo expedita. Id asperiores labore beatae provident, cumque voluptas totam porro explicabo. Officiis, accusantium.</p>
  </div>
</div>
```







