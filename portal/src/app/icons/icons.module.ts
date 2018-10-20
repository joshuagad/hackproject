import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { IconHome, IconList, IconMap, IconUsers } from 'angular-feather';

@NgModule({
  imports: [
    CommonModule
  ],
  declarations: [],
  exports: [
    IconHome,
    IconList,
    IconMap,
    IconUsers
  ]
})
export class IconsModule { }
