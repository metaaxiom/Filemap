# Filemap
Visual display for directory structures

[DEMO](http://htmlpreview.github.io/?https://github.com/JDerwisz/Filemap/blob/master/demo.html)

## Installation
Simply include the required CSS files in the `head`:
```html
<link rel="stylesheet" type="text/css" href="style.css">
```
and the required Javascript files before the closing of the `body` tag:
```html
<script type="text/javascript" src="collapsible.js"></script>
```
Additionally, make sure you have jQuery included, and keep in mind that Filemap uses Roboto as its default font (though you can change this in the stylesheet).

## Basic Structure
Include all Filemap items within a `filemap` wrapper element:
```html
<div class="filemap"></div>
```
To add folders, create a `ul` with a `folder-wrap` class, setting the first `li` element as the `folder-name`, like this:
```html
<ul class="folder-wrap">
	<li class="folder-name">Folder 3<span>a non-collapsible folder</span></li>
</ul>
```
All the consecutive elements can either be files, or nested folders. To add files to a folder, simply add `li` elements with the `file` class:
```html
<li class="file">File</li>
```
To nest folders, just include them using another `ul` element.

## Collapsible Folders
To make folders collapsible, make sure you've included the `collapsible.js` file, and append a `collapsible` class to the folder wrapper, like this:
```html
<ul class="folder-wrap collapsible"></ul>
```

## Descriptions
You can include two types of descriptions: a directory description, and folder/file descriptions. To add a directory description, simply add the `filemap-description` element immediately after the opening of the main wrapper element:
```html
<div class="filemap-description">A short directory description</div>
```
For folder and file descriptions, enclose them within a `span` tag inside the folder/file name element, like so:
```html
<li class="folder-name">Folder<span>a short folder description</span></li>
```
## Complete Example
```html
<div class="filemap">
<div class="filemap-description">A short directory description</div>
	<ul class="folder-wrap collapsible">
		<li class="folder-name">Folder 1<span>a collapsible folder</span></li>
		<li class="file">File 1</li>
		<li class="file">File 2<span>a short file description</span></li>
		<li class="file">File 3</li>
		<ul class="folder-wrap collapsible">
			<li class="folder-name">Folder 2</li>
			<li class="file">File 1</li>
			<li class="file">File 2</li>
		</ul>
	</ul>
	<ul class="folder-wrap">
		<li class="folder-name">Folder 3<span>a non-collapsible folder</span></li>
		<li class="file">File 1</li>
		<li class="file">File 2</li>
	</ul>
</div>
```
