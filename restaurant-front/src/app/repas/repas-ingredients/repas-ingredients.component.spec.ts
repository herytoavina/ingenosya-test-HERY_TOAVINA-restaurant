import { ComponentFixture, TestBed } from '@angular/core/testing';

import { RepasIngredientsComponent } from './repas-ingredients.component';

describe('RepasIngredientsComponent', () => {
  let component: RepasIngredientsComponent;
  let fixture: ComponentFixture<RepasIngredientsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ RepasIngredientsComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(RepasIngredientsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
