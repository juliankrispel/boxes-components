<?php require_once('header.php');?>
<div class="row p-t-l m-t-l p">
    <h1 class="m-b-s">Form Elements</h1>
    <form action="">
        <fieldset>
            <legend>Normal Form with &lt;fieldset&gt;</legend>
            <label for="label1">Label</label>
            <input type="text" id="label1" placeholder="input"/>
            <label for="label2">Label</label>
            <input type="text" id="label2" placeholder="input"/>
            <label for="label3">Label</label>
            <input type="text" id="label3" placeholder="input"/>
            <input type="submit" class="button no-margin" value="Submit"/>
        </fieldset>
        <div class="row">
            <h3 class="m-b-t m-t-s">Horizontal Forms</h3>
            <label class="small-3 tiny-12 large-2 columns inline-label">Inline Label</label><input class="large-10 tiny-12 small-9 columns" type="text" placeholder="Hello"/>

            <div class="large-6 small-12 columns large-p-r">
                <label class="small-3 tiny-12 large-2 columns inline-label">Name</label>
                <input class="large-10 tiny-12 small-9 columns" type="text" placeholder="John"/>
            </div>
            <div class="large-6 small-12 columns large-p-l">
                <label class="small-3 p-r-s tiny-12 large-2 columns inline-label">Surname</label><input class="large-10 tiny-12 small-9 columns" type="text" placeholder="Doe"/>
            </div>
        </div>
        <div class="row">
            <h3 class="m-b-t m-t-s">Right aligned labels</h3>
            <div class="large-4 small-12 columns large-p-r">
                <label class="large-text-right large-p-r-s small-3 tiny-12 large-4 columns inline-label">One Question</label><input class="large-8 tiny-12 small-9 columns" type="text" placeholder="John"/>
            </div>
            <div class="large-4 small-12 columns large-p-l">
                <label class="large-text-right large-p-r-s small-3 tiny-12 large-4 columns inline-label">Another Question</label><input class="large-8 tiny-12 small-9 columns" type="text" placeholder="Doe"/>
            </div>
            <div class="large-4 small-12 columns large-p-l">
                <label class="large-text-right large-p-r-s small-3 tiny-12 large-4 columns inline-label">Whatever</label><input class="large-8 tiny-12 small-9 columns" type="text" placeholder="Doe"/>
            </div>
        </div>
        <div class="row">
            <h3 class="m-t m-b-t">Custom Dropdowns</h3>
            <div class="large-6 columns large-p-r">
                <div class="button text-left full-width">
                    Dropdown
                    <span class="right">&#9660;</span>
                </div>
            </div>
            <div class="large-6 columns large-p-l">
                <div class="button text-left full-width">
                    <div class="row m-b-t">
                        Dropdown
                        <span class="right">&#9660;</span>
                    </div>
                    <input type="text" placeholder="Search Options"/>
                    <ul class="row no-list-style">
                        <li>Option 1</li>
                        <li>Option 2</li>
                        <li>Option 3</li>
                        <li>Option 4</li>
                    </ul>
                </div>

            </div>
            <h3 class="m-t m-b-t">Custom Button Groups</h3>
            <div class="row btn-group m-b">
                <div class="large-2 columns button text-left">Filters<div class="right">I</div></div>
                <input class="large-9 columns" type="text" placeholder="Search"/>
                <div class="button large-1 columns">Search</div>
            </div>
        </div>
        <div class="row">
            <h3 class="m-t m-b-t">Inline Checkboxes and Inputs</h3>
            <label class="inline-form"><input type="checkbox"/> Yes I want that newsletter please</label><br />
            <label class="inline-form">Yes I want that newsletter please <input type="checkbox"/></label>
            <div class="inline-form">Hello my name is <input type="text" placeholder="My Name"/> and my Sirname is <input type="text" placeholder="My Sirname">. My wife goes by the name of <input placeholder="My wife's name"/> and my pets called <select><option>Nelly</option><option>Gerald</option></select>. Like that? <input type="checkbox" /></div>
        </div>
    </form>
</div>
<?php require_once('footer.php');?>
