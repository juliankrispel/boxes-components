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
            <h3 class="m-t m-b-t"><a href="http://ivaynberg.github.io/select2">Select2</a> Custom Dropdown Skin</h3>
            <div class="large-6 columns large-p-r">
                <div class="select2-container" id="s2id_type"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span>Company</span>   <abbr class="select2-search-choice-link" style="display:none;"></abbr>   <abbr class="select2-search-choice-close" style="display:none;"></abbr>   <div><b></b></div></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen1"></div>
            </div>
            <div class="large-6 columns large-p-l">
                <div class="select2-container select2-dropdown-open" id="s2id_type"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span>Company</span>   <abbr class="select2-search-choice-link" style="display:none;"></abbr>   <abbr class="select2-search-choice-close" style="display:none;"></abbr>   <div><b></b></div></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen1"></div>
                <div class="select2-drop undefined select2-with-searchbox select2-drop-active" id="select2-drop">   <div class="select2-search">       <input type="text" autocomplete="off" class="select2-input select2-focused">   </div>   <ul class="select2-results"><li class="select2-results-dept-0 select2-result select2-result-selectable"><div class="select2-result-label"><span class="select2-match"></span>Person</div></li><li class="select2-results-dept-0 select2-result select2-result-selectable select2-highlighted"><div class="select2-result-label"><span class="select2-match"></span>Company</div></li></ul></div>
            </div>

        </div>
        <div class="row">
            <h3 class="m-t m-b-t">Custom Button Groups</h3>
            <div class="row btn-group m-b">
                <div class="large-2 columns button text-left">Filters<div class="right">I</div></div>
                <input class="large-9 columns" type="text" placeholder="Search"/>
                <div class="button large-1 columns">Search</div>
            </div>
            <div class="row">
                <div class="large-4 columns">
                    <div class="row btn-group">
                        <input type="date" class="large-9 columns"/>
                        <button class="button large-3 columns icon-remove"></button>
                    </div>
                </div>
                <div class="large-4 columns">
                </div>
                <div class="large-4 columns">
                </div>
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
