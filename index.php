<?php require_once('header.php'); ?>
<header class="row">
    <nav>
        <ul class="inline-list">
            <li><a href="">Inline</a></li>
            <li><a href="">Navigation</a></li>
            <li><a href="">can be</a></li>
            <li><a href="">achived with</a></li>
            <li><a href="">inline-list</a></li>
        </ul>
    </nav>
</header>
<div class="row">
    <div class="large-12 columns">
        <h1>Welcome to Boxes</h1>
        <p>This is version 0.1.0.</p>
    </div>
    <hr class="m-b">
</div>
<div class="row">
    <div class="large-6 columns p-r-s">
        <a href="" class="button small">This is a button</a><br />
        <button class="button primary">This is a button</button><br />
        <input class="button" type="submit" size="900" value="Input Submit Button"/><br />
        <button class="button large">This is a button</button> <br />
        <div class="panel">
            <h1>This is a panel with a paragraph</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
        <hr>
        <small class="m-b-s">This is a button group</small>
        <div class="btn-group">
            <button class="button small">Button 1</button>
            <button class="button small">Button 2</button>
            <a href="" class="primary button small">Action</a>
        </div>

        <div class="btn-group">
            <input type="search" placeholder="e.g. Black Hat">
            <a href="" class="primary button">Action</a>
        </div>
        <hr>
        <small>Custom Lists</small>
        <ul class="custom-list">
            <li><span class="custom-list-image icon-ok"></span>Task 1</li>
            <li><span class="custom-list-image icon-check"></span>Task 2</li>
            <li><span class="custom-list-image icon-camera"></span>Task 3</li>
            <li><span class="custom-list-image icon-facetime-video"></span>Task 4</li>
            <li><span class="custom-list-image icon-music"></span>Task 5</li>
        </ul>
    </div>
    <div class="large-6 columns p-l-s">
        <h1>h1 Heading</h1>
        <h2>h2 Heading</h2>
        <h3>h3 Heading</h3>
        <h4>h4 Heading</h4>
        <h5>h5 Heading</h5>
        <h6>h6 Heading</h6>
        <hr>
        <p><strong>A paragraph:</strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ul</p>
        <hr>
        <small>Unordered Lists</small>
        <ul>
            <li>One Item</li>
            <li>Another Item</li>
            <li>Yet another one</li>
            <li>Last but not least</li>
        </ul>
        <small>An undordered List without bullets</small>
        <ul class="no-list-style">
            <li>One Item</li>
            <li>Another Item</li>
            <li>Yet another one</li>
            <li>Last but not least</li>
        </ul>
        <small>Nested Lists</small>
        <ul>
            <li>One Item</li>
            <li>Another Item</li>
            <li>Yet another one</li>
            <li>Last but not least
                <ul>
                    <li>A nested item</li>
                    <li>Another nested item</li>
                    <li>Yet another nested item</li>
                </ul>
            </li>
        </ul>
        <small>Nested Lists without bullets</small>
        <ul class="no-list-style">
            <li>One Item</li>
            <li>Another Item</li>
            <li>Yet another one</li>
            <li>Last but not least
                <ul class="no-list-style">
                    <li>A nested item</li>
                    <li>Another nested item</li>
                    <li>Yet another nested item</li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<table>
    
</table>
<script>
document.write('<script src=' +
('__proto__' in {} ? 'javascripts/vendor/zepto' : 'javascripts/vendor/jquery') +
'.js><\/script>')
</script>
<?php require_once('footer.php'); ?>
