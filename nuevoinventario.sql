USE [master]
GO
/****** Object:  Database [inventario_grupoalza]    Script Date: 4/8/2021 6:45:29 PM ******/
CREATE DATABASE [inventario_grupoalza]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'inventario_grupoalza', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\inventario_grupoalza.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'inventario_grupoalza_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\inventario_grupoalza_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
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
/****** Object:  Table [dbo].[inventario_inventario]    Script Date: 4/8/2021 6:45:29 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[inventario_inventario](
	[idinventario] [bigint] IDENTITY(1,1) NOT NULL,
	[idequipo] [bigint] NULL,
	[ciudad] [varchar](50) NULL,
	[fecha_ingreso] [datetime] NULL,
	[estado] [bit] NULL,
	[persona_ingreso] [varchar](50) NULL,
	[nombreequipo] [varchar](50) NULL,
	[marcca_desktop] [varchar](50) NULL,
	[modelo_desktop] [varchar](50) NULL,
	[servicetag_desktop] [varchar](50) NULL,
	[procesador_desktop] [varchar](50) NULL,
	[ram_desktop] [varchar](20) NULL,
	[discoduro_desktop] [varchar](20) NULL,
	[descripcion_desktop] [varchar](50) NULL,
	[marca_laptop] [varchar](50) NULL,
	[modelo_laptop] [varchar](50) NULL,
	[servicetag] [varchar](50) NULL,
	[procesador_laptop] [varchar](50) NULL,
	[ram_laptop] [varchar](20) NULL,
	[discoduro_laptop] [varchar](20) NULL,
	[descripcion_laptop] [varchar](50) NULL,
	[marca_cel] [varchar](50) NULL,
	[modelo_cel] [varchar](50) NULL,
	[imei_cel] [varchar](50) NULL,
	[descripcion_cel] [varchar](50) NULL,
	[marca_tel] [varchar](50) NULL,
	[modelo_tel] [varchar](50) NULL,
	[imei_tel] [varchar](50) NULL,
	[descripcion_tel] [varchar](50) NULL,
	[marca_otro] [varchar](50) NULL,
	[modelo_otro] [varchar](50) NULL,
	[descripcion_otro] [varchar](50) NULL,
 CONSTRAINT [PK_inventario_inventario_1] PRIMARY KEY CLUSTERED 
(
	[idinventario] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  View [dbo].[V_equiposdesktop]    Script Date: 4/8/2021 6:45:29 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE VIEW [dbo].[V_equiposdesktop]
AS
SELECT        idinventario, idequipo, ciudad, fecha_ingreso, estado, persona_ingreso, nombreequipo, marcca_desktop, modelo_desktop, servicetag_desktop, ram_desktop, discoduro_desktop, descripcion_desktop
FROM            dbo.inventario_inventario
WHERE        (estado = 0) AND (nombreequipo = 'desktop')
GO
/****** Object:  Table [dbo].[inventario_asignacion]    Script Date: 4/8/2021 6:45:29 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[inventario_asignacion](
	[idasignacion] [bigint] NOT NULL,
	[idempleado] [bigint] NULL,
	[idinventario] [bigint] NULL,
	[fecha_asignacion] [datetime] NULL,
	[asignador] [varchar](50) NULL,
	[autorizador] [varchar](50) NULL,
 CONSTRAINT [PK_inventario_asignacion] PRIMARY KEY CLUSTERED 
(
	[idasignacion] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[inventario_descarte]    Script Date: 4/8/2021 6:45:29 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[inventario_descarte](
	[iddescarte] [bigint] NOT NULL,
	[idinventario] [bigint] NULL,
 CONSTRAINT [PK_inventario_descarte] PRIMARY KEY CLUSTERED 
(
	[iddescarte] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[inventario_empleado]    Script Date: 4/8/2021 6:45:29 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[inventario_empleado](
	[idempleado] [bigint] NOT NULL,
	[nombreempleado] [varchar](50) NULL,
	[celular] [varchar](20) NULL,
	[ciudad] [varchar](30) NULL,
	[area] [varchar](50) NULL,
	[correo] [varchar](50) NULL,
 CONSTRAINT [PK_inventario_empleado] PRIMARY KEY CLUSTERED 
(
	[idempleado] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[inventario_recepcion]    Script Date: 4/8/2021 6:45:29 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[inventario_recepcion](
	[idrecepcion] [bigint] NOT NULL,
	[idempleado] [bigint] NULL,
	[idinventario] [bigint] NULL,
	[fecha_recepcion] [datetime] NULL,
	[recibidor] [varchar](50) NULL,
	[autorizador] [varchar](50) NULL,
 CONSTRAINT [PK_inventario_recepcion] PRIMARY KEY CLUSTERED 
(
	[idrecepcion] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[inventario_asignacion]  WITH CHECK ADD  CONSTRAINT [FK_inventario_asignacion_inventario_empleado1] FOREIGN KEY([idempleado])
REFERENCES [dbo].[inventario_empleado] ([idempleado])
GO
ALTER TABLE [dbo].[inventario_asignacion] CHECK CONSTRAINT [FK_inventario_asignacion_inventario_empleado1]
GO
ALTER TABLE [dbo].[inventario_asignacion]  WITH CHECK ADD  CONSTRAINT [FK_inventario_asignacion_inventario_inventario] FOREIGN KEY([idinventario])
REFERENCES [dbo].[inventario_inventario] ([idinventario])
GO
ALTER TABLE [dbo].[inventario_asignacion] CHECK CONSTRAINT [FK_inventario_asignacion_inventario_inventario]
GO
ALTER TABLE [dbo].[inventario_recepcion]  WITH CHECK ADD  CONSTRAINT [FK_inventario_recepcion_inventario_empleado] FOREIGN KEY([idempleado])
REFERENCES [dbo].[inventario_empleado] ([idempleado])
GO
ALTER TABLE [dbo].[inventario_recepcion] CHECK CONSTRAINT [FK_inventario_recepcion_inventario_empleado]
GO
ALTER TABLE [dbo].[inventario_recepcion]  WITH CHECK ADD  CONSTRAINT [FK_inventario_recepcion_inventario_inventario] FOREIGN KEY([idinventario])
REFERENCES [dbo].[inventario_inventario] ([idinventario])
GO
ALTER TABLE [dbo].[inventario_recepcion] CHECK CONSTRAINT [FK_inventario_recepcion_inventario_inventario]
GO
/****** Object:  StoredProcedure [dbo].[Proc_insertardatosdesktop]    Script Date: 4/8/2021 6:45:29 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================




CREATE PROCEDURE [dbo].[Proc_insertardatosdesktop] 
	-- Add the parameters for the stored procedure here
	@ciudad varchar(50),
	@estado bit,
	@nombreequipo varchar(50),
	@marrca_desktop varchar(50),
	@modelo_desktop varchar(50),
	@servicetag_desktop varchar(50),
	@procesador_desktop varchar(50),
	@ram_desktop varchar(50),
	@discoduro_desktop varchar(50),
	@descripcion_desktop varchar(50)


AS
BEGIN
--declaracion de variable para hacer autoincrementable el id de equipo
DECLARE @videquipo as BIGINT
SET @videquipo = (SELECT MAX(idequipo) FROM inventario_inventario);

insert into inventario_inventario (idequipo, ciudad, fecha_ingreso, estado, nombreequipo, marcca_desktop, modelo_desktop, servicetag_desktop,procesador_desktop,ram_desktop, discoduro_desktop, descripcion_desktop)
							values((@videquipo + 1),@ciudad , GETDATE(),@estado ,@nombreequipo ,@marrca_desktop ,@modelo_desktop ,@servicetag_desktop ,@procesador_desktop ,@ram_desktop ,@discoduro_desktop ,@descripcion_desktop)
 


END
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane1', @value=N'[0E232FF0-B466-11cf-A24F-00AA00A3EFFF, 1.00]
Begin DesignProperties = 
   Begin PaneConfigurations = 
      Begin PaneConfiguration = 0
         NumPanes = 4
         Configuration = "(H (1[40] 4[20] 2[20] 3) )"
      End
      Begin PaneConfiguration = 1
         NumPanes = 3
         Configuration = "(H (1 [50] 4 [25] 3))"
      End
      Begin PaneConfiguration = 2
         NumPanes = 3
         Configuration = "(H (1 [50] 2 [25] 3))"
      End
      Begin PaneConfiguration = 3
         NumPanes = 3
         Configuration = "(H (4 [30] 2 [40] 3))"
      End
      Begin PaneConfiguration = 4
         NumPanes = 2
         Configuration = "(H (1 [56] 3))"
      End
      Begin PaneConfiguration = 5
         NumPanes = 2
         Configuration = "(H (2 [66] 3))"
      End
      Begin PaneConfiguration = 6
         NumPanes = 2
         Configuration = "(H (4 [50] 3))"
      End
      Begin PaneConfiguration = 7
         NumPanes = 1
         Configuration = "(V (3))"
      End
      Begin PaneConfiguration = 8
         NumPanes = 3
         Configuration = "(H (1[56] 4[18] 2) )"
      End
      Begin PaneConfiguration = 9
         NumPanes = 2
         Configuration = "(H (1 [75] 4))"
      End
      Begin PaneConfiguration = 10
         NumPanes = 2
         Configuration = "(H (1[66] 2) )"
      End
      Begin PaneConfiguration = 11
         NumPanes = 2
         Configuration = "(H (4 [60] 2))"
      End
      Begin PaneConfiguration = 12
         NumPanes = 1
         Configuration = "(H (1) )"
      End
      Begin PaneConfiguration = 13
         NumPanes = 1
         Configuration = "(V (4))"
      End
      Begin PaneConfiguration = 14
         NumPanes = 1
         Configuration = "(V (2))"
      End
      ActivePaneConfig = 0
   End
   Begin DiagramPane = 
      Begin Origin = 
         Top = 0
         Left = 0
      End
      Begin Tables = 
         Begin Table = "inventario_inventario"
            Begin Extent = 
               Top = 6
               Left = 38
               Bottom = 136
               Right = 235
            End
            DisplayFlags = 280
            TopColumn = 0
         End
      End
   End
   Begin SQLPane = 
   End
   Begin DataPane = 
      Begin ParameterDefaults = ""
      End
   End
   Begin CriteriaPane = 
      Begin ColumnWidths = 11
         Column = 1440
         Alias = 900
         Table = 1170
         Output = 720
         Append = 1400
         NewValue = 1170
         SortType = 1350
         SortOrder = 1410
         GroupBy = 1350
         Filter = 1350
         Or = 1350
         Or = 1350
         Or = 1350
      End
   End
End
' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'V_equiposdesktop'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPaneCount', @value=1 , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'V_equiposdesktop'
GO
USE [master]
GO
ALTER DATABASE [inventario_grupoalza] SET  READ_WRITE 
GO
