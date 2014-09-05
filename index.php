<?php include('/_includes/header.php'); ?>

    <!--
    <div id="atoms-colors" class="sg-pattern">
        <h2 class="sg-head">Colors</h2>
        <div class="sg-body">
            <ul class="sg-colors">
              <li><span class="sg-swatch" style="color:#000;"></span></li>
              <li><span class="sg-swatch" style="color:#111;"></span></li>
              <li><span class="sg-swatch" style="color:#222;"></span></li>
            </ul>
        </div>
    </div>
    -->

    <!-- Begin: Fonts - variable: $global-font-family -->
    <div id="atoms-colors" class="sg-pattern">
        <h2 class="sg-head">Fonts</h2>
        <div class="sg-body">
            <p class="font-primary">Primary font: Proxima Nova, Helvetica, Arial, sans-serif;</p>
            <p class="font-primary"><em>Primary font italic: Proxima Nova, Helvetica, Arial, sans-serif;</em></p>
            <p class="font-primary font-bold">Primary font bold: Proxima Nova, Helvetica, Arial, sans-serif;</p>
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;p>Primary font: Proxima Nova, Helvetica, Arial, sans-serif;&lt;/p> 
                    &lt;p>&lt;em>Primary font italic: Proxima Nova, Helvetica, Arial, sans-serif;&lt;/em>&lt;/p>
                    &lt;p class="font-bold">Primary font bold: Proxima Nova, Helvetica, Arial, sans-serif;&lt;/p>
                </code>
            </pre>
        </div>

    </div>
    <!-- / End: Fonts -->

    
    <!-- Begin: Visibility -->
    <div id="atoms-button" class="sg-pattern">
        <h2 class="sg-head">Visibility</h2>
        <div class="sg-body">
            <p class="show-small-only">This text is visible only on small screens</p>
            <p class="show-medium-down">This text is shown on small and medium screens and hidden on large screens</p>
            <p class="show-medium-up">This text is hidden on small screens and shown on medium and large screens</p>
            <p class="show-large-only">This text is visible only on large screens</p>
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;p class="show-small-only">This text is visible only on small screens&lt;/p>
                    &lt;p class="show-medium-down">This text is shown on small and medium screens and hidden on large screens&lt;/p>
                    &lt;p class="show-medium-up">This text is hidden on small screens and shown on medium and large screens&lt;/p>
                    &lt;p class="show-large-only">This text is visible only on large screens&lt;/p>
                </code>
            </pre>
        </div>

    </div>
    <!-- End: Visibility -->




    <!-- Begin: Headings -->
    <div id="atoms-button" class="sg-pattern">
        <h2 class="sg-head">Headings</h2>
        <div class="sg-body">
            <h1>Heading Level 1</h1>
            <h2>Heading Level 2</h2>
            <h3>Heading Level 3</h3>
            <h4>Heading Level 4</h4>
            <h5>Heading Level 5</h5>
            <h6>Heading Level 6</h6>
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;h1>Heading Level 1&lt;/h1>
                    &lt;h2>Heading Level 2&lt;/h2>
                    &lt;h3>Heading Level 3&lt;/h3>
                    &lt;h4>Heading Level 4&lt;/h4>
                    &lt;h5>Heading Level 5&lt;/h5>
                    &lt;h6>Heading Level 6&lt;/h6>
                </code>
            </pre>
        </div>

    </div>
    <!-- End: Headings -->




    <!-- Begin: Paragraph -->
    <div id="atoms-button" class="sg-pattern">
        <h2 class="sg-head">Paragraph</h2>
        <div class="sg-body">
            <p>So, setting about it as methodically as men might smoke out a wasps' nest, the Martians spread this strange stifling vapour over the Londonward country. The horns of the crescent slowly moved apart, until at last they formed a line from Hanwell to Coombe and Malden. All night through their destructive tubes advanced.</p>
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;p>So, setting about it as methodically as men might smoke out a wasps' nest, the Martians spread this strange stifling vapour over the Londonward country. The horns of the crescent slowly moved apart, until at last they formed a line from Hanwell to Coombe and Malden. All night through their destructive tubes advanced.&lt;/p>
                </code>
            </pre>
        </div>

    </div>
    <!-- End: Paragraph -->




    <!-- Begin: Inline Elements -->
    <div id="atoms-button" class="sg-pattern">
        <h2 class="sg-head">Inline Elements</h2>
        <div class="sg-body">

            <p><a href="#">This is a text link</a></p>

            <p><strong>Strong is used to indicate strong importance</strong></p>

            <p><em>This text has added emphasis</em></p>

            <p>The <b>b element</b> is stylistically different text from normal text, without any special importance</p>

            <p>The <i>i element</i> is text that is set off from the normal text</p>

            <p>The <u>u element</u> is text with an unarticulated, though explicitly rendered, non-textual annotation</p>

            <p><del>This text is deleted</del> and <ins>This text is inserted</ins></p>

            <p><s>This text has a strikethrough</s></p>

            <p>Superscript<sup>®</sup></p>

            <p>Subscript for things like H<sub>2</sub>O</p>

            <p><small>This small text is small for for fine print, etc.</small></p>

            <p>Abbreviation: <abbr title="HyperText Markup Language">HTML</abbr></p>

            <p>Keybord input: <kbd>Cmd</kbd></p>

            <p><q cite="https://developer.mozilla.org/en-US/docs/HTML/Element/q">This text is a short inline quotation</q></p>

            <p><cite>This is a citation</cite>

            </p><p>The <dfn>dfn element</dfn> indicates a definition.</p>

            <p>The <mark>mark element</mark> indicates a highlight</p>

            <p><code>This is what inline code looks like.</code></p>

            <p><samp>This is sample output from a computer program</samp></p>

            <p>The <var>variarble element</var>, such as <var>x</var> = <var>y</var></p>

        </div>
        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;p>&lt;a href="#">This is a text link&lt;/a>&lt;/p>

                    &lt;p>&lt;strong>Strong is used to indicate strong importance&lt;/strong>&lt;/p>

                    &lt;p>&lt;em>This text has added emphasis&lt;/em>&lt;/p>

                    &lt;p>The &lt;b>b element&lt;/b> is stylistically different text from normal text, without any special importance&lt;/p>

                    &lt;p>The &lt;i>i element&lt;/i> is text that is set off from the normal text&lt;/p>

                    &lt;p>The &lt;u>u element&lt;/u> is text with an unarticulated, though explicitly rendered, non-textual annotation&lt;/p>

                    &lt;p>&lt;del>This text is deleted&lt;/del> and &lt;ins>This text is inserted&lt;/ins>&lt;/p>

                    &lt;p>&lt;s>This text has a strikethrough&lt;/s>&lt;/p>

                    &lt;p>Superscript&lt;sup>®&lt;/sup>&lt;/p>

                    &lt;p>Subscript for things like H&lt;sub>2&lt;/sub>O&lt;/p>

                    &lt;p>&lt;small>This small text is small for for fine print, etc.&lt;/small>&lt;/p>

                    &lt;p>Abbreviation: &lt;abbr title="HyperText Markup Language">HTML&lt;/abbr>&lt;/p>

                    &lt;p>Keybord input: &lt;kbd>Cmd&lt;/kbd>&lt;/p>

                    &lt;p>&lt;q cite="https://developer.mozilla.org/en-US/docs/HTML/Element/q">This text is a short inline quotation&lt;/q>&lt;/p>

                    &lt;p>&lt;cite>This is a citation&lt;/cite>

                    &lt;/p>&lt;p>The &lt;dfn>dfn element&lt;/dfn> indicates a definition.&lt;/p>

                    &lt;p>The &lt;mark>mark element&lt;/mark> indicates a highlight&lt;/p>

                    &lt;p>&lt;code>This is what inline code looks like.&lt;/code>&lt;/p>

                    &lt;p>&lt;samp>This is sample output from a computer program&lt;/samp>&lt;/p>

                    &lt;p>The &lt;var>variarble element&lt;/var>, such as &lt;var>x&lt;/var> = &lt;var>y&lt;/var>&lt;/p>
                </code>
            </pre>
        </div>

    </div>
    <!-- End: Inline Elements -->




    <!-- Begin: Paragraph -->
    <div id="atoms-button" class="sg-pattern">
        <h2 class="sg-head">Time</h2>
        <div class="sg-body">
            <time datetime="2014-08-14T06:45+00:00">2 weeks ago</time>
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;time datetime="2014-08-14T06:45+00:00">2 weeks ago&lt;/time>
                </code>
            </pre>
        </div>

    </div>
    <!-- End: Paragraph -->




    <!-- Begin: Hr -->
    <div id="atoms-button" class="sg-pattern">
        <h2 class="sg-head">Horizontal rule</h2>
        <div class="sg-body">
            <hr/>
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;hr/>
                </code>
            </pre>
        </div>

    </div>
    <!-- End: Hr -->




    <!-- Begin: Caption -->
    <div id="atoms-button" class="sg-pattern">
        <h2 class="sg-head">Caption</h2>
        <div class="sg-body">
            <p class="caption">A caption can be applied to an image, quote, form field, etc.</p>
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;class="caption">A caption can be applied to an image, quote, form field, etc.&lt;/p>
                </code>
            </pre>
        </div>

    </div>
    <!-- End: Caption -->




    <!-- Begin: Unordered List -->
    <div id="atoms-button" class="sg-pattern">
        <h2 class="sg-head">Unordered List</h2>
        <div class="sg-body">
            <ul>
                <li>This is a list item in an unordered list</li>
                <li>An unordered list is a list in which the sequence of items is not important. Sometimes, an unordered list is a bulleted list. And this is a long list item in an unordered list that can wrap onto a new line.</li>
                <li>Lists can be nested inside of each other
                    <ul>
                        <li>This is a nested list item</li>
                        <li>This is another nested list item in an unordered list</li>
                    </ul>
                </li>
                <li>This is the last list item</li>
            </ul>
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;ul>
                        &lt;li>This is a list item in an unordered list&lt;/li>
                        &lt;li>An unordered list is a list in which the sequence of items is not important. Sometimes, an unordered list is a bulleted list. And this is a long list item in an unordered list that can wrap onto a new line.&lt;/li>
                        &lt;li>Lists can be nested inside of each other
                            &lt;ul>
                                &lt;li>This is a nested list item&lt;/li>
                                &lt;li>This is another nested list item in an unordered list&lt;/li>
                            &lt;/ul>
                        &lt;/li>
                        &lt;li>This is the last list item&lt;/li>
                    &lt;/ul>
                </code>
            </pre>
        </div>

    </div>
    <!-- End: Caption -->

    <!-- Begin: Ordered List -->
    <div id="atoms-button" class="sg-pattern">
        <h2 class="sg-head">Ordered List</h2>
        <div class="sg-body">
            <ol>
                <li>This is a list item in an ordered list</li>
                <li>An ordered list is a list in which the sequence of items is important. Sometimes, an ordered list is a bulleted list. And this is a long list item in an ordered list that can wrap onto a new line.</li>
                <li>Lists can be nested inside of each other
                    <ol>
                        <li>This is a nested list item</li>
                        <li>This is another nested list item in an ordered list</li>
                    </ol>
                </li>
                <li>This is the last list item</li>
            </ol>
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;ol>
                        &lt;li>This is a list item in an ordered list&lt;/li>
                        &lt;li>An ordered list is a list in which the sequence of items is important. Sometimes, an ordered list is a bulleted list. And this is a long list item in an unordered list that can wrap onto a new line.&lt;/li>
                        &lt;li>Lists can be nested inside of each other
                            &lt;ol>
                                &lt;li>This is a nested list item&lt;/li>
                                &lt;li>This is another nested list item in an ordered list&lt;/li>
                            &lt;/ol>
                        &lt;/li>
                        &lt;li>This is the last list item&lt;/li>
                    &lt;/ol>
                </code>
            </pre>
        </div>

    </div>
    <!-- End: Caption -->

    <!-- Begin: Logo -->
    <div id="atoms-logo" class="sg-pattern">
        <h2 class="sg-head">Logo</h2>
        <div class="sg-body">
            <img src="http://placehold.it/350x150" />
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;img src="http://placehold.it/350x150" />
                </code>
            </pre>
        </div> 

    </div>
    <!-- End: Logo -->

    <!-- Begin: Landscape 4x3 -->
    <div id="atoms-landscape-4x3" class="sg-pattern">
        <h2 class="sg-head">Landscape 4x3</h2>
        <div class="sg-body">
            <img src="http://placehold.it/1200x900" />
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;img src="http://placehold.it/1200x900" />
                </code>
            </pre>
        </div> 

    </div>
    <!-- End: Landscape 4x3 -->

    <!-- Begin: Hero -->
    <div id="atoms-hero" class="sg-pattern">
        <h2 class="sg-head">Hero</h2>
        <div class="sg-body">
            <img src="http://placehold.it/800x450" />
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;img src="http://placehold.it/800x450" />
                </code>
            </pre>
        </div>    

    </div>
    <!-- End: Hero -->

    <!-- Begin: Square -->
    <div id="atoms-square" class="sg-pattern">
        <h2 class="sg-head">Square</h2>
        <div class="sg-body">
            <img src="http://placehold.it/600x600" />
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;img src="http://placehold.it/600x600" />
                </code>
            </pre>
        </div> 

    </div>
    <!-- End: Square -->

    <!-- Begin: Square -->
    <div id="atoms-avatar" class="sg-pattern">
        <h2 class="sg-head">Avatar</h2>
        <div class="sg-body">
            <img src="http://placehold.it/300x300" />
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;img src="http://placehold.it/300x300" />
                </code>
            </pre>
        </div> 

    </div>
    <!-- End: Square -->

    <!-- Begin: Square -->
    <div id="atoms-square" class="sg-pattern">
        <h2 class="sg-head">Thumb</h2>
        <div class="sg-body">
            <img src="http://placehold.it/400x225" />
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;img src="http://placehold.it/400x225" />
                </code>
            </pre>
        </div> 

    </div>
    <!-- End: Square -->

    <!-- Begin: Icons -->
    <div id="atoms-icons" class="sg-pattern">
        <h2 class="sg-head">Icons</h2>
        <div class="sg-body">
            N/A
        </div>
    </div>
    <!-- End: Icons -->

    <!-- Begin: Loading Icon -->
    <div id="atoms-load-icon" class="sg-pattern">
        <h2 class="sg-head">Loading Icon</h2>
        <div class="sg-body">
            <img src="http://placehold.it/30x30" />
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;img src="http://placehold.it/30x30" />
                </code>
            </pre>
        </div> 

    </div>
    <!-- End: Loading Icon -->

    <!-- Begin: Favicons -->
    <div id="atoms-load-icon" class="sg-pattern">
        <h2 class="sg-head">Favicon</h2>
        <div class="sg-body">
            <img src="http://placehold.it/16x16" />
            <img src="http://placehold.it/32x32" />
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;img src="http://placehold.it/16x16" />
                    &lt;img src="http://placehold.it/32x32" />
                </code>
            </pre>
        </div> 

    </div>
    <!-- End: Favicons -->


    <!-- Begin: Text Fields -->
    <div id="atoms-text-fields" class="sg-pattern">
        <h2 class="sg-head">Text Fields</h2>
        <div class="sg-body">
            <fieldset>
                <div class="form__container">
                    <label>Text Input</label>
                    <input class="form__control" type="text" placeholder="Text Input" />
                </div>
                <div class="form__container">
                    <label>Password</label>
                    <input class="form__control" type="text" placeholder="Type your Password" />
                </div>
                <div class="form__container">
                    <label>Web Address</label>
                    <input class="form__control" type="text" placeholder="http://yoursite.com" />
                </div>
                <div class="form__container">
                    <label>Email Address</label>
                    <input class="form__control" type="text" placeholder="name@email.com" />
                </div>
                <div class="form__container">
                    <label>Number Input</label>
                    <input class="form__control" type="text" placeholder="Enter a Number" />
                </div>
                <div class="form__container">
                    <label>Textarea</label>
                    <textarea class="form__control" row="8" cols="48" placeholder="Enter your message here"></textarea>
                </div>

                <div class="form__container has-success">
                    <label>Valid Text Input</label>
                    <input class="form__control" type="text" />
                </div>

                <div class="form__container has-error">
                    <label>Error Text Input</label>
                    <input class="form__control" type="text" />
                </div>
            </fieldset>
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;fieldset>
                        &lt;div class="form__container">
                            &lt;label>Text Input&lt;/label>
                            &lt;input class="form__control" type="text" placeholder="Text Input" />
                        &lt;/div>
                        &lt;div class="form__container">
                            &lt;label>Password&lt;/label>
                            &lt;input class="form__control" type="text" placeholder="Type your Password" />
                        &lt;/div>
                        &lt;div class="form__container">
                            &lt;label>Web Address&lt;/label>
                            &lt;input class="form__control" type="text" placeholder="http://yoursite.com" />
                        &lt;/div>
                        &lt;div class="form__container">
                            &lt;label>Email Address&lt;/label>
                            &lt;input class="form__control" type="text" placeholder="name@email.com" />
                        &lt;/div>
                        &lt;div class="form__container">
                            &lt;label>Number Input&lt;/label>
                            &lt;input class="form__control" type="text" placeholder="Enter a Number" />
                        &lt;/div>
                        &lt;div class="form__container">
                            &lt;label>Textarea&lt;/label>
                            &lt;textarea class="form__control" row="8" cols="48" placeholder="Enter your message here">&lt;/textarea>
                        &lt;/div>

                        &lt;div class="form__container has-success">
                            &lt;label>Valid Text Input&lt;/label>
                            &lt;input class="form__control" type="text" />
                        &lt;/div>

                        &lt;div class="form__container has-error">
                            &lt;label>Error Text Input&lt;/label>
                            &lt;input class="form__control" type="text" />
                        &lt;/div>
                    &lt;/fieldset>
                </code>
            </pre>
        </div> 

    </div>
    <!-- End: Text Fields -->


    <!-- Begin: Select Menu 
    <div id="atoms-select-menu" class="sg-pattern">
        <h2 class="sg-head">Select Menu</h2>
        <div class="sg-body">
            <fieldset>
                <select>
                    <option>Option One</option>
                    <option>Option Two</option>
                    <option>Option Three</option>
                    <option>Option Four</option>
                </select>
            </fieldset>
        </div>
    </div>
    End: Select Menu -->


    <!-- Begin: Checkbox
    <div id="atoms-checkbox" class="sg-pattern">
        <h2 class="sg-head">Checkbox</h2>
        <div class="sg-body">
            <fieldset>
                <ul>
                    <li>
                        <label for="checkbox1">
                </ul>
            </fieldset>
        </div>
    </div>
    End: Checkbox -->


    <!-- Begin: Buttons -->
    <div id="atoms-button" class="sg-pattern">
        <h2 class="sg-head">Buttons</h2>
        <div class="sg-body">
            <p>
                <a href="#" class="btn">Button</a>
            </p>
            <p>
                <a href="#" class="btn btn-alt">Alternate Button </a>
            </p>
            <p>
                <a href="#" class="btn btn-disabled">Disabled Button</a>
            </p>
            <p>
                <a href="#" class="btn-text">Text Button</a>
            </p>
        </div>

        <div class="sg-code">
            <h3 class="sg-code-head">HTML</h3>
            <pre class="sg-code-html">
                <code class="html">
                    &lt;p>
                        &lt;a href="#" class="btn">Button&lt;/a>
                    &lt;/p>
                    &lt;p>
                        &lt;a href="#" class="btn btn-alt">Alternate Button &lt;/a>
                    &lt;/p>
                    &lt;p>
                        &lt;a href="#" class="btn btn-disabled">Disabled Button&lt;/a>
                    &lt;/p>
                    &lt;p>
                        &lt;a href="#" class="btn-text">Text Button&lt;/a>
                    &lt;/p>                
                </code>
            </pre>
        </div> 

    </div>
    <!-- End: Buttons -->




<?php include('/_includes/footer.php'); ?>



