<?php
  // src/Comment.php
  /**
   * @Entity @Table(name="comments")
   **/
  class Comment{
    /** @Id @Column(type="integer") @GeneratedValue **/
      protected $id;
    /** @Column(type="text", length=5000, nullable=true) **/
      protected $content;
    /** @Column(type="datetime", length=50, nullable=true) **/
      protected $dateTime;

  /**
   * Get id
   *
   * @return integer
   */
  public function getId()
  {
      return $this->id;
  }

  /**
   * Set content
   *
   * @param string $content
   *
   * @return Comment
   */
  public function setContent($content)
  {
      $this->content = $content;

      return $this;
  }

  /**
   * Get content
   *
   * @return string
   */
  public function getContent()
  {
      return $this->content;
  }

  /**
   * Set dateTime
   *
   * @param \DateTime $dateTime
   *
   * @return Comment
   */
  public function setDateTime($dateTime)
  {
      $this->dateTime = $dateTime;

      return $this;
  }

  /**
   * Get dateTime
   *
   * @return \DateTime
   */
  public function getDateTime()
  {
      return $this->dateTime;
  }
}
?>
