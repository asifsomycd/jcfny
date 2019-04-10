<!DOCTYPE html>
<html>
    <head>
    <?php
        //IXF: place getHeadOpen just inside of the HTML head, used for to append SEO-related header elements.
        print $be_ixf->getHeadOpen();
    ?>
    <title></title>
    </head>

    <body>
    <?php
        //IXF: place getBodyOpen and close just inside of the HTML body, used for to append SEO-related body elements.
        print $be_ixf->getBodyOpen();
        print $be_ixf->close();
    ?>

    <div>Header</div>
    <div>Body</div>

    <!--IXF: The following <div> block needs to be placed in the location where the link equity block will be displayed-->
    <!--IXF: For your website, the location is in footer before <div id="colophon">-->
    <div class="be-ix-link-block"><!--Link Equity Target Div--></div>
    <!--IXF: end-->

    <div>Footer</div>

</body>
</html>
