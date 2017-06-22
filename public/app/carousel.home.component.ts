/**
 * Created by Rodas on 10/26/2016.
 */

import {Component} from '@angular/core';
import {NgbCarouselConfig} from '@ng-bootstrap/ng-bootstrap';

@Component({
    selector: 'home-carousel',
    templateUrl: '/angular/template/home/carousel',
    providers: [NgbCarouselConfig]
})
export class CarouselHomeComponent {
    constructor(config: NgbCarouselConfig) {
        // customize default values of carousels used by this component tree
        config.interval = 10000;
        config.wrap = false;
        config.keyboard = false;
    }
}
