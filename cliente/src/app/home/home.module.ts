import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { HomeRoutingModule } from './home-routing.module';
import { HomeComponent } from './home.component';
import { TurismoModule } from '../turismo/turismo.module';



@NgModule({
  declarations: [HomeComponent],
  imports: [CommonModule, HomeRoutingModule, TurismoModule],
})
export class HomeModule {}
