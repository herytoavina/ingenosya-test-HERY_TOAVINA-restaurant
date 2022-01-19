import { Component, OnInit, ViewChild } from '@angular/core';
import { MatPaginator } from '@angular/material/paginator';
import { MatTableDataSource } from '@angular/material/table';
import { RepasService } from 'src/app/repas/repas.service';

@Component({
  selector: 'app-index',
  templateUrl: './index.component.html',
  styleUrls: ['./index.component.css']
})
export class IndexComponent implements OnInit {

  displayedColumns: string[] = ['nom', 'quantite', 'action'];
  // dataSource: MatTableDataSource<Repas>;
  data:any;
  // dataSource: MatTableDataSource<any>;
  dataSource1: MatTableDataSource<any>;

  
  @ViewChild(MatPaginator) paginator!: MatPaginator;
  
  constructor(private repasService: RepasService) { 
    this.data = [];
    // this.dataSource = new MatTableDataSource();
    this.dataSource1 = new MatTableDataSource();
  }
  
  ngAfterViewInit(){
    this.dataSource1.paginator = this.paginator;
  }

  ngOnInit(): void {
    this.repasService.repas_crees().subscribe( (data: any) =>{
      this.dataSource1.data = data.data; 
      console.log("DATASOURCE1", this.dataSource1.data);
    })
    // console.log("DATASOURCE OUT", this.repass);
    // this.getRepas();
  }
}


