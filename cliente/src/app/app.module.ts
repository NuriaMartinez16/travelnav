import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule } from '@angular/router';
import { AppRoutingModule } from './app-routing.module';

import { AppComponent } from './app.component';
import { CoreModule } from './core/core.module';
import { HomeModule } from './home/home.module';
import { SharedModule } from './shared/shared.module';
import { TurismoModule } from './turismo/turismo.module';


@NgModule({
  declarations: [
    AppComponent,

  ],
  imports: [BrowserModule,
    RouterModule,
    CoreModule,
    HomeModule,
    SharedModule,
  TurismoModule, AppRoutingModule],
  providers: [],
  bootstrap: [AppComponent],
})
export class AppModule {}
