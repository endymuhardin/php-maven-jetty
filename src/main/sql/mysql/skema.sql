drop table if exists m_product;
create table m_product(
    id int auto_increment,
    code varchar(100) not null,
    name varchar(255),
    constraint primary key (id),
    constraint unique_product_code unique key (code)
)Engine=InnoDB;
