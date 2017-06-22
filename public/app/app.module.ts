import { NgModule }                     from '@angular/core';
import { BrowserModule }                from '@angular/platform-browser';
import {NgbModule}                      from '@ng-bootstrap/ng-bootstrap';

import { AppComponent }                 from './app.component';
import { NavigationComponent }          from './navigation.component';
import { CarouselHomeComponent }        from './carousel.home.component';

@NgModule({
    imports:      [ BrowserModule, NgbModule.forRoot() ],
    declarations: [ AppComponent, CarouselHomeComponent, NavigationComponent],
    bootstrap:    [ AppComponent, NavigationComponent]
})

export class AppModule { }
