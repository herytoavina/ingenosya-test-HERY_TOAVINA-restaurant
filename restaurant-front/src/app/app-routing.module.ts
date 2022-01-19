import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { IndexComponent } from './repas/index/index.component';
import { ListComponent } from './repas/list/list.component';

const routes: Routes = [
  { path: 'repas/index', component: IndexComponent },
  { path: 'repas/list', component: ListComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
