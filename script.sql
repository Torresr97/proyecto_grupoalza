USE [master]
GO
/****** Object:  Database [inventario_grupoalza]    Script Date: 30/3/2021 12:52:19 p. m. ******/
CREATE DATABASE [inventario_grupoalza]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'inventario_grupoalza', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.SERVIDORLENOVO\MSSQL\DATA\inventario_grupoalza.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'inventario_grupoalza_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.SERVIDORLENOVO\MSSQL\DATA\inventario_grupoalza_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT
GO
ALTER DATABASE [inventario_grupoalza] SET COMPATIBILITY_LEVEL = 150
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [inventario_grupoalza].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [inventario_grupoalza] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET ARITHABORT OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [inventario_grupoalza] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [inventario_grupoalza] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET  DISABLE_BROKER 
GO
ALTER DATABASE [inventario_grupoalza] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [inventario_grupoalza] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET RECOVERY FULL 
GO
ALTER DATABASE [inventario_grupoalza] SET  MULTI_USER 
GO
ALTER DATABASE [inventario_grupoalza] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [inventario_grupoalza] SET DB_CHAINING OFF 
GO
ALTER DATABASE [inventario_grupoalza] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [inventario_grupoalza] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [inventario_grupoalza] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [inventario_grupoalza] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
EXEC sys.sp_db_vardecimal_storage_format N'inventario_grupoalza', N'ON'
GO
ALTER DATABASE [inventario_grupoalza] SET QUERY_STORE = OFF
GO
USE [inventario_grupoalza]
GO
/****** Object:  Table [dbo].[asignacion_equipo]    Script Date: 30/3/2021 12:52:20 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[asignacion_equipo](
	[idasignacion] [bigint] IDENTITY(1,1) NOT NULL,
	[idempleado] [bigint] NULL,
	[idinventario] [bigint] NULL,
	[fecha_asignacion] [datetime] NULL,
	[asignador] [varchar](50) NULL,
	[autorizador] [varchar](50) NULL,
 CONSTRAINT [PK_asignacion_equipo] PRIMARY KEY CLUSTERED 
(
	[idasignacion] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[descarte_equipo]    Script Date: 30/3/2021 12:52:20 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[descarte_equipo](
	[iddescarte] [bigint] IDENTITY(1,1) NOT NULL,
	[idinventario] [bigint] NULL,
 CONSTRAINT [PK_descarte_equipo] PRIMARY KEY CLUSTERED 
(
	[iddescarte] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[empleado]    Script Date: 30/3/2021 12:52:20 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[empleado](
	[idempleado] [bigint] IDENTITY(1,1) NOT NULL,
	[nombreempleado] [varchar](40) NULL,
	[celular] [varchar](15) NULL,
	[ciudad] [varchar](50) NULL,
	[area] [varchar](40) NULL,
	[correo] [varchar](60) NULL,
 CONSTRAINT [PK_empleado] PRIMARY KEY CLUSTERED 
(
	[idempleado] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[equipos]    Script Date: 30/3/2021 12:52:20 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[equipos](
	[idequipo] [bigint] IDENTITY(1,1) NOT NULL,
	[ciudad] [varchar](50) NULL,
	[nombreequipo] [varchar](50) NULL,
	[marca_desktop] [varchar](50) NULL,
	[modelo_desktop] [varchar](50) NULL,
	[servicetag_desktop] [varchar](50) NULL,
	[ram_desktop] [varchar](10) NULL,
	[discoduro_desktop] [varchar](10) NULL,
	[descripcion_desktop] [varchar](80) NULL,
	[marca_laptop] [varchar](50) NULL,
	[modelo_laptop] [varchar](50) NULL,
	[servicetag_laptop] [varchar](50) NULL,
	[ram_laptop] [varchar](10) NULL,
	[discoduro_laptop] [varchar](10) NULL,
	[descripcion_laptop] [varchar](80) NULL,
	[marca_monitor] [varchar](50) NULL,
	[modelo_monitor] [varchar](50) NULL,
	[descripcion_monitor] [varchar](80) NULL,
	[marca_otros] [varchar](50) NULL,
	[modelo_otros] [varchar](50) NULL,
	[descripcion] [varchar](80) NULL,
 CONSTRAINT [PK_equipos] PRIMARY KEY CLUSTERED 
(
	[idequipo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[inventario_equipo]    Script Date: 30/3/2021 12:52:20 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[inventario_equipo](
	[idinventario] [bigint] IDENTITY(1,1) NOT NULL,
	[idequipo] [bigint] NULL,
	[fecha_ingreso] [datetime] NULL,
	[estado] [bit] NULL,
	[persona_ingreso] [varchar](50) NULL,
 CONSTRAINT [PK_inventario_equipo] PRIMARY KEY CLUSTERED 
(
	[idinventario] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[recepcion_equipo]    Script Date: 30/3/2021 12:52:20 p. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[recepcion_equipo](
	[idrecepcion] [bigint] NOT NULL,
	[idempleado] [bigint] NULL,
	[idinventario] [bigint] NULL,
	[fecha_recepcion] [datetime] NULL,
	[recibidor] [varchar](50) NULL,
	[autorizador] [varchar](50) NULL,
 CONSTRAINT [PK_recepcion_equipo] PRIMARY KEY CLUSTERED 
(
	[idrecepcion] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[asignacion_equipo]  WITH CHECK ADD  CONSTRAINT [FK_asignacion_equipo_empleado] FOREIGN KEY([idempleado])
REFERENCES [dbo].[empleado] ([idempleado])
GO
ALTER TABLE [dbo].[asignacion_equipo] CHECK CONSTRAINT [FK_asignacion_equipo_empleado]
GO
ALTER TABLE [dbo].[asignacion_equipo]  WITH CHECK ADD  CONSTRAINT [FK_asignacion_equipo_inventario_equipo] FOREIGN KEY([idinventario])
REFERENCES [dbo].[inventario_equipo] ([idinventario])
GO
ALTER TABLE [dbo].[asignacion_equipo] CHECK CONSTRAINT [FK_asignacion_equipo_inventario_equipo]
GO
ALTER TABLE [dbo].[descarte_equipo]  WITH CHECK ADD  CONSTRAINT [FK_descarte_equipo_inventario_equipo] FOREIGN KEY([idinventario])
REFERENCES [dbo].[inventario_equipo] ([idinventario])
GO
ALTER TABLE [dbo].[descarte_equipo] CHECK CONSTRAINT [FK_descarte_equipo_inventario_equipo]
GO
ALTER TABLE [dbo].[inventario_equipo]  WITH CHECK ADD  CONSTRAINT [FK_inventario_equipo_equipos] FOREIGN KEY([idequipo])
REFERENCES [dbo].[equipos] ([idequipo])
GO
ALTER TABLE [dbo].[inventario_equipo] CHECK CONSTRAINT [FK_inventario_equipo_equipos]
GO
ALTER TABLE [dbo].[recepcion_equipo]  WITH CHECK ADD  CONSTRAINT [FK_recepcion_equipo_empleado] FOREIGN KEY([idempleado])
REFERENCES [dbo].[empleado] ([idempleado])
GO
ALTER TABLE [dbo].[recepcion_equipo] CHECK CONSTRAINT [FK_recepcion_equipo_empleado]
GO
ALTER TABLE [dbo].[recepcion_equipo]  WITH CHECK ADD  CONSTRAINT [FK_recepcion_equipo_inventario_equipo] FOREIGN KEY([idinventario])
REFERENCES [dbo].[inventario_equipo] ([idinventario])
GO
ALTER TABLE [dbo].[recepcion_equipo] CHECK CONSTRAINT [FK_recepcion_equipo_inventario_equipo]
GO
USE [master]
GO
ALTER DATABASE [inventario_grupoalza] SET  READ_WRITE 
GO
