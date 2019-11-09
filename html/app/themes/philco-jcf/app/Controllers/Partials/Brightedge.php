<?php
namespace App\Controllers\Partials;

trait Brightedge
{
    public function brightedgeHead()
    {
        global $be_ixf;

        if (class_exists('BrightEdge\BEIXFClient')) {
            // IXF: place getHeadOpen just inside of the HTML head, used for to append SEO-related header elements.
            return $be_ixf->getHeadOpen();
        }

        return '';
    }

    public function brightedgeBody()
    {
        global $be_ixf;

        if (class_exists('BrightEdge\BEIXFClient')) {
            // IXF: place getBodyOpen and close just inside of the HTML body, used for to append SEO-related body elements.
            return $be_ixf->getBodyOpen() . $be_ixf->close();
        }

        return '';
    }
}
