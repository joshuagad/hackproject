import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

import { IconsModule } from './icons/icons.module';
import { OverviewComponent } from './overview/overview.component';
import { ReportsListComponent } from './reports-list/reports-list.component';
import { MapComponent } from './map/map.component';
import { CaseListComponent } from './case-list/case-list.component';

import { NgxMapboxGLModule } from 'ngx-mapbox-gl';

@NgModule({
  declarations: [
    AppComponent,
    OverviewComponent,
    ReportsListComponent,
    MapComponent,
    CaseListComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    IconsModule,
    NgxMapboxGLModule.withConfig({
          accessToken: 'pk.eyJ1Ijoiam9zaHVhZ2FkIiwiYSI6ImNpaG4wYXd2ODBvb3F0dGx6dTZmeGVlZXQifQ.Kkp19uppZO2snbCqQqkT5A'
        })
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
