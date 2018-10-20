import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { OverviewComponent } from './overview/overview.component';
import { ReportsListComponent } from './reports-list/reports-list.component';
import { MapComponent } from './map/map.component';
import { CaseListComponent } from './case-list/case-list.component';

const routes: Routes = [
  { path: '', component: MapComponent },
  { path: 'reports', component: ReportsListComponent },
  { path: 'map', component: MapComponent },
  { path: 'cases', component: CaseListComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
